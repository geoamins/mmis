<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentMaster;
use App\Models\Country;
use App\Models\Province;
use App\Models\District;
use App\Models\Department;
use App\Models\Session;
use App\Models\StudentType;
use App\Models\Classes;
use App\Models\Sections;
use Barryvdh\DomPDF\Facade\Pdf;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
        $this->middleware('permission:student-list|student-create|student-edit|student-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:student-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:student-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:student-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {

        if (!empty($request->query('search'))) {
            $search = $request->query('search');
            $data = StudentMaster::where('StudentName', 'like', '%' . $search . '%')->orderBy('StudentID', 'DESC')->paginate(10);
        } elseif (!empty($request->query('searchbyrollno'))) {
            $search = $request->query('searchbyrollno');
            $data = StudentMaster::where('RegistrationNo', '=', $search)->orderBy('StudentID', 'DESC')->paginate(10);
        } else {
            $data = StudentMaster::orderBy('StudentID', 'DESC')->paginate(10);
        }
        return view('student.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $provinces = Province::all();
        $districts = District::all();
        $departments = Department::all();
        $sessions = Session::all();
        $studenttypes = StudentType::all();
        $classes = Classes::all();
        $sections = Sections::all();


        if (empty(StudentMaster::get()->last())) {
            $LastRegNo = 22600;
        } elseif (!empty(StudentMaster::get()->last())) {
            $LastReg = StudentMaster::orderBy('StudentID', 'ASC')->get()->last();
            $LastRegNo = $LastReg->RegistrationNo;
        }

        return view('student.create', compact('countries', 'provinces', 'districts', 'departments', 'sessions', 'studenttypes', 'classes', 'sections', 'LastRegNo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'RegistrationNo' => 'required',
            'StudentName' => 'required',
            'SCNIC' => 'required',
            'DOB' => 'required',
            'GenderID' => 'required',
            'DeptID' => 'required',
            'FatherName' => 'required',
            'FCNIC' => 'required',
            'GuardianName' => 'required',
            'GuardianRelation' => 'required',
            'FMobile' => 'required',
            'CurrentAddress' => 'required',
            'PermanentAddress' => 'required',
            'CountryID' => 'required',
            'ProvinceID' => 'required',
            'DistrictID' => 'required',
            'SessionID' => 'required',
            'AdmissionDate' => 'required',
            'HijriYear' => 'required',
            'StudentTypeID' => 'required',
            'ClassID' => 'required',
            'SectionID' => 'required',
            'HostelStatus' => 'required',
            // 'PreviousMadrasa' => 'required',
            // 'IslamicEdu' => 'required',
            // 'AsriEdu' => 'required',
            // 'AddlEdu' => 'required',
            // 'DOSLC' => 'required',
            // 'ReasonSLC' => 'required',
            'Image' => 'required'
        ]);

        $ImageName = time() . '.' . $request->Image->extension();
        $request->Image->move(public_path('images'), $ImageName);

        StudentMaster::create([
            'RegistrationNo' => $request->RegistrationNo,
            'StudentName' => $request->StudentName,
            'SCNIC' => $request->SCNIC,
            'DOB' => $request->DOB,
            'GenderID' => $request->GenderID,
            'DeptID' => $request->DeptID,
            'FatherName' => $request->FatherName,
            'FCNIC' => $request->FCNIC,
            'GuardianName' => $request->GuardianName,
            'GuardianRelation' => $request->GuardianRelation,
            'FMobile' => $request->FMobile,
            'CurrentAddress' => $request->CurrentAddress,
            'PermanentAddress' => $request->PermanentAddress,
            'CountryID' => $request->CountryID,
            'ProvinceID' => $request->ProvinceID,
            'DistrictID' => $request->DistrictID,
            'SessionID' => $request->SessionID,
            'AdmissionDate' => $request->AdmissionDate,
            'HijriYear' => $request->HijriYear,
            'StudentTypeID' => $request->StudentTypeID,
            'ClassID' => $request->ClassID,
            'SectionID' => $request->SectionID,
            'HostelStatus' => $request->HostelStatus,
            'PreviousMadrasa' => $request->PreviousMadrasa,
            'IslamicEdu' => $request->IslamicEdu,
            'AsriEdu' => $request->AsriEdu,
            'AddlEdu' => $request->AddlEdu,
            'DOSLC' => $request->DOSLC,
            'ReasonSLC' => $request->ReasonSLC,
            'Image' => $ImageName,
        ]);

        return redirect()->route('student.index')
            ->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $data = StudentMaster::find($id);
        $data = StudentMaster::leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
            ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
            ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
            ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
            ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
            ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->find($id);

        return view('student.show', compact('data'));
    }

    public function show_api(Request $id)
    {

        // $data = StudentMaster::find($id);
        $data = StudentMaster::leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
            ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
            ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
            ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
            ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
            ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->find($id->id);

        return response()->json($data);
        // return view('student.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $data = StudentMaster::find($id);
        $data = StudentMaster::leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
            ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
            ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
            ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
            ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
            ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->find($id);

        $countries = Country::all();
        $provinces = Province::all();
        $districts = District::all();
        $departments = Department::all();
        $sessions = Session::all();
        $studenttypes = StudentType::all();
        $classes = Classes::all();
        $sections = Sections::all();

        return view('student.edit', compact('data', 'countries', 'provinces', 'districts', 'departments', 'sessions', 'studenttypes', 'classes', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'RegistrationNo' => 'required',
            'StudentName' => 'required',
            'SCNIC' => 'required',
            'DOB' => 'required',
            'GenderID' => 'required',
            'DeptID' => 'required',
            'FatherName' => 'required',
            'FCNIC' => 'required',
            'GuardianName' => 'required',
            'GuardianRelation' => 'required',
            'FMobile' => 'required',
            'CurrentAddress' => 'required',
            'PermanentAddress' => 'required',
            'CountryID' => 'required',
            'ProvinceID' => 'required',
            'DistrictID' => 'required',
            'SessionID' => 'required',
            'AdmissionDate' => 'required',
            'HijriYear' => 'required',
            'StudentTypeID' => 'required',
            'ClassID' => 'required',
            'SectionID' => 'required',
            'HostelStatus' => 'required',
            'PreviousMadrasa' => 'required',
            'IslamicEdu' => 'required',
            'AsriEdu' => 'required',
            'AddlEdu' => 'required',
            //     'DOSLC' => 'required',
            //     'ReasonSLC' => 'required',
        ]);

        $data = StudentMaster::find($id);

        // $ImageName = time().'.'.$request->Image->extension();
        // $request->Image->move(public_path('images'), $ImageName);

        $data->RegistrationNo = $request->input('RegistrationNo');
        $data->StudentName = $request->input('StudentName');
        $data->SCNIC = $request->input('SCNIC');
        $data->DOB = $request->input('DOB');
        $data->GenderID = $request->input('GenderID');
        $data->DeptID = $request->input('DeptID');
        $data->FatherName = $request->input('FatherName');
        $data->FCNIC = $request->input('FCNIC');
        $data->GuardianName = $request->input('GuardianName');
        $data->GuardianRelation = $request->input('GuardianRelation');
        $data->FMobile = $request->input('FMobile');
        $data->CurrentAddress = $request->input('CurrentAddress');
        $data->PermanentAddress = $request->input('PermanentAddress');
        $data->CountryID = $request->input('CountryID');
        $data->ProvinceID = $request->input('ProvinceID');
        $data->DistrictID = $request->input('DistrictID');
        $data->SessionID = $request->input('SessionID');
        $data->AdmissionDate = $request->input('AdmissionDate');
        $data->HijriYear = $request->input('HijriYear');
        $data->StudentTypeID = $request->input('StudentTypeID');
        $data->ClassID = $request->input('ClassID');
        $data->SectionID = $request->input('SectionID');
        $data->HostelStatus = $request->input('HostelStatus');
        $data->PreviousMadrasa = $request->input('PreviousMadrasa');
        $data->IslamicEdu = $request->input('IslamicEdu');
        $data->AsriEdu = $request->input('AsriEdu');
        $data->AddlEdu = $request->input('AddlEdu');
        $data->DOSLC = $request->input('DOSLC');
        $data->ReasonSLC = $request->input('ReasonSLC');
        // $data->Image = $ImageName;
        $data->save();

        return redirect()->route('student.index')
            ->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        StudentMaster::find($id)->delete();

        return redirect()->route('student.index')
            ->with('success', 'Student deleted successfully');
    }
    public function struckOffStudent(Request $request)
    {
        $validated = $request->validate([
            'DOSLC' => 'required',
            'ReasonSLC' => 'required',
        ]);

        $data = StudentMaster::find($request->StudentID);

        $data->DOSLC = $request->input('DOSLC');
        $data->ReasonSLC = $request->input('ReasonSLC');
        $data->save();

        return redirect()->route('StruckOffIndex')
            ->with('success', 'Student Struck Offed!');
    }


    public function createPDFReport()
    {
        $data = StudentMaster::leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
            ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
            ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
            ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
            ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
            ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->get();

        $pdf = PDF::loadView('student.studentdata', array('data' => $data));

        return $pdf->download('StudentReport.pdf');
    }

    public function studentFormPDF(string $id)
    {
        $data = StudentMaster::leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
            ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
            ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
            ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
            ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
            ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->find($id);

        return view('student.studentformpdf', compact('data'));
    }
    public function studentIDCard(string $id)
    {
        $data = StudentMaster::leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
            ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
            ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
            ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
            ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
            ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->find($id);

        return view('student.studentcard', compact('data'));
    }

    public function studentReportIndex(Request $request)
    {
        $countries = Country::all();
        $provinces = Province::all();
        $districts = District::all();
        $departments = Department::all();
        $sessions = Session::all();
        $classes = Classes::all();
        $sections = Sections::all();
        $students = StudentMaster::all();

        $query = StudentMaster::query()
            ->leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
            ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
            ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
            ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
            ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
            ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID');

        $query->with('country','province','district','dept', 'session', 'class', 'section');

        if (!empty($request->query('CountryID'))) {
            $query->where('studentmaster.CountryID', '=', $request->input('CountryID'));
        }

        if (!empty($request->query('ProvinceID'))) {
            $query->whereHas('province', function ($classQuery) use ($request) {
                $classQuery->where('studentmaster.ProvinceID', '=', $request->input('ProvinceID'));
            });
        }
        if (!empty($request->query('DistrictID'))) {
            $query->whereHas('district', function ($classQuery) use ($request) {
                $classQuery->where('studentmaster.DistrictID', '=', $request->input('DistrictID'));
            });
        }
        if (!empty($request->query('DeptID'))) {
            $query->whereHas('dept', function ($classQuery) use ($request) {
                $classQuery->where('studentmaster.DeptID', '=', $request->input('DeptID'));
            });
        }
        if (!empty($request->query('SessionID'))) {
            $query->whereHas('session', function ($classQuery) use ($request) {
                $classQuery->where('studentmaster.SessionID', '=', $request->input('SessionID'));
            });
        }
        if (!empty($request->query('ClassID'))) {
            $query->whereHas('class', function ($classQuery) use ($request) {
                $classQuery->where('studentmaster.ClassID', '=', $request->input('ClassID'));
            });
        }
        if (!empty($request->query('SectionID'))) {
            $query->whereHas('section', function ($classQuery) use ($request) {
                $classQuery->where('studentmaster.SectionID', '=', $request->input('SectionID'));
            });
        }
        else {
            $data = StudentMaster::leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
                ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
                ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
                ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
                ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
                ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
                ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
                ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
                ->orderBy('StudentID', 'DESC');
        }
        $data = $query->orderBy('StudentID', 'DESC')->get();

        return view('report.student.index', compact('data', 'students' , 'countries' , 'provinces' , 'districts' , 'departments', 'sessions', 'classes', 'sections'));
    }

    public function studentAdmissionReport(Request $request)
    {
        $admitted = StudentMaster::whereNotNull('AdmissionDate')->whereNull('DOSLC')->count();
        $doslcstudents = StudentMaster::whereNotNull('DOSLC')->count();
        $totalstudents = StudentMaster::count();
        if(!empty($request->OptionID)){
            if($request->OptionID == 1){
                $data = StudentMaster::whereNotNull('AdmissionDate')
                ->whereNull('DOSLC')
                ->leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
                ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
                ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
                ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
                ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
                ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
                ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
                ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
                ->orderBy('StudentID', 'DESC')->get();
            }
            if($request->OptionID == 2){
                $data = StudentMaster::whereNotNull('DOSLC')
                ->leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
                ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
                ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
                ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
                ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
                ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
                ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
                ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
                ->orderBy('StudentID', 'DESC')->get();
            }
        }
        else {
            $data = StudentMaster::leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
                ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
                ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
                ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
                ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
                ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
                ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
                ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
                ->orderBy('StudentID', 'DESC')->get();
        }

        return view('report.admission.index', compact('data','admitted','doslcstudents','totalstudents'));
    }

    public function studentLeaveCertificate(string $id)
    {
        $data = StudentMaster::leftjoin('setup_country', 'setup_country.CountryID', '=', 'studentmaster.CountryID')
            ->leftjoin('setup_province', 'setup_province.ProvinceID', '=', 'studentmaster.ProvinceID')
            ->leftjoin('setup_district', 'setup_district.DistrictID', '=', 'studentmaster.DistrictID')
            ->leftjoin('setup_department', 'setup_department.DeptID', '=', 'studentmaster.DeptID')
            ->leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
            ->leftjoin('setup_student_type', 'setup_student_type.StudentTypeID', '=', 'studentmaster.StudentTypeID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->find($id);

        return view('report.admission.leavecertificate', compact('data'));
    }

    public function fetchStudents(Request $request)
    {
        $data['student'] = StudentMaster::leftjoin('setup_session', 'setup_session.SessionID', '=', 'studentmaster.SessionID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->where("RegistrationNo", $request->RegistrationNo)->get();
        return response()->json($data);
    }

    public function fetchStudentsBySection(Request $request)
    {
        $data['student'] = StudentMaster::leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->where('setup_section.SectionID','=',$request->SectionID)
            ->get();

        return response()->json($data);
    }
}
