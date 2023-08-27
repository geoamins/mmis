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
use Barryvdh\DomPDF\PDF;
use Alert;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
         $this->middleware('permission:student-list|student-create|student-edit|student-delete', ['only' => ['index','store']]);
         $this->middleware('permission:student-create', ['only' => ['create','store']]);
         $this->middleware('permission:student-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:student-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {

        if(!empty($request->query('search'))){
            $search=$request->query('search');
            $data=StudentMaster::where('StudentName','like','%'.$search.'%')->orderBy('StudentID','DESC')->paginate(5);
        }
        elseif(!empty($request->query('searchbyrollno'))){
            $search=$request->query('searchbyrollno');
            $data=StudentMaster::where('RegistrationNo','=',$search)->orderBy('StudentID','DESC')->paginate(5);
        }
        else{
            $data=StudentMaster::orderBy('StudentID','DESC')->paginate(5);
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
        $LastRegNo = StudentMaster::get()->last();
        return view('student.create',compact('countries','provinces','districts','departments','sessions','studenttypes','classes','sections','LastRegNo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            // 'RegistrationNo' => 'required',
            // 'StudentName' => 'required',
            // 'SCNIC' => 'required',
            // 'DOB' => 'required',
            // 'GenderID' => 'required',
            // 'DeptID' => 'required',
            // 'FatherName' => 'required',
            // 'FCNIC' => 'required',
            // 'GuardianName' => 'required',
            // 'GuardianRelation' => 'required',
            // 'FMobile' => 'required',
            // 'CurrentAddress' => 'required',
            // 'PermanentAddress' => 'required',
            // 'CountryID' => 'required',
            // 'ProvinceID' => 'required',
            // 'DistrictID' => 'required',
            // 'SessionID' => 'required',
            // 'AdmissionDate' => 'required',
            // 'HijriYear' => 'required',
            // 'StudentTypeID' => 'required',
            // 'ClassID' => 'required',
            // 'SectionID' => 'required',
            // 'HostelStatus' => 'required',
            // 'PreviousMadrasa' => 'required',
            // 'IslamicEdu' => 'required',
            // 'AsriEdu' => 'required',
            // 'AddlEdu' => 'required',
            // 'DOSLC' => 'required',
            // 'ReasonSLC' => 'required',
        ]);

        $ImageName = time().'.'.$request->Image->extension();
        $request->Image->move(public_path('images'), $ImageName);

        // $LastRegNo = StudentMaster::get()->last();

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

        Alert::toast('You\'ve Successfully Registered', 'success');

        return redirect()->route('student.index')
            ->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $data = StudentMaster::find($id);
        $data = StudentMaster::leftjoin('setup_country','setup_country.CountryID','=','studentmaster.CountryID')
        ->leftjoin('setup_province','setup_province.ProvinceID','=','studentmaster.ProvinceID')
        ->leftjoin('setup_district','setup_district.DistrictID','=','studentmaster.DistrictID')
        ->leftjoin('setup_department','setup_department.DeptID','=','studentmaster.DeptID')
        ->leftjoin('setup_session','setup_session.SessionID','=','studentmaster.SessionID')
        ->leftjoin('setup_student_type','setup_student_type.StudentTypeID','=','studentmaster.StudentTypeID')
        ->leftjoin('setup_class','setup_class.ClassID','=','studentmaster.ClassID')
        ->leftjoin('setup_section','setup_section.SectionID','=','studentmaster.SectionID')
        ->find($id);

        return view('student.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $data = StudentMaster::find($id);
        $data = StudentMaster::leftjoin('setup_country','setup_country.CountryID','=','studentmaster.CountryID')
        ->leftjoin('setup_province','setup_province.ProvinceID','=','studentmaster.ProvinceID')
        ->leftjoin('setup_district','setup_district.DistrictID','=','studentmaster.DistrictID')
        ->leftjoin('setup_department','setup_department.DeptID','=','studentmaster.DeptID')
        ->leftjoin('setup_session','setup_session.SessionID','=','studentmaster.SessionID')
        ->leftjoin('setup_student_type','setup_student_type.StudentTypeID','=','studentmaster.StudentTypeID')
        ->leftjoin('setup_class','setup_class.ClassID','=','studentmaster.ClassID')
        ->leftjoin('setup_section','setup_section.SectionID','=','studentmaster.SectionID')
        ->find($id);

        $countries = Country::all();
        $provinces = Province::all();
        $districts = District::all();
        $departments = Department::all();
        $sessions = Session::all();
        $studenttypes = StudentType::all();
        $classes = Classes::all();
        $sections = Sections::all();

        return view('student.edit',compact('data','countries','provinces','districts','departments','sessions','studenttypes','classes','sections'));
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

    // public function PDFgenerater(string $id){
    //     dd('heelo');
    //     $data = StudentMaster::leftjoin('setup_country','setup_country.CountryID','=','studentmaster.CountryID')
    //     ->leftjoin('setup_province','setup_province.ProvinceID','=','studentmaster.ProvinceID')
    //     ->leftjoin('setup_district','setup_district.DistrictID','=','studentmaster.DistrictID')
    //     ->leftjoin('setup_department','setup_department.DeptID','=','studentmaster.DeptID')
    //     ->leftjoin('setup_session','setup_session.SessionID','=','studentmaster.SessionID')
    //     ->leftjoin('setup_student_type','setup_student_type.StudentTypeID','=','studentmaster.StudentTypeID')
    //     ->leftjoin('setup_class','setup_class.ClassID','=','studentmaster.ClassID')
    //     ->leftjoin('setup_section','setup_section.SectionID','=','studentmaster.SectionID')
    //     ->find($id);

    //     $pdf = PDF::loadView('student.show', $data);
    //     return $pdf->download('pdfview.pdf');
    // }
}