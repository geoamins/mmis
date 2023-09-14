<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\StudentMaster;
use App\Models\Country;
use App\Models\Province;
use App\Models\District;
use App\Models\Department;
use App\Models\Session;
use App\Models\StudentType;
use App\Models\Classes;
use App\Models\Sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::all();
        return view('attendance.student.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $query = StudentMaster::query();

        $this->validate($request, [
            'ClassID' => 'required',
            'SectionID' => 'required',
        ]);

        if (!empty($request->query('ClassID')) && !empty($request->query('ClassID'))) {

            $query->where('studentmaster.ClassID', '=', $request->input('ClassID'))
                ->where('studentmaster.SectionID', '=', $request->input('SectionID'));

            $data = $query->get();
        }

        $data = $query->orderBy('StudentName', 'ASC')->get();

        return view('attendance.student.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $attendanceData = $request->input('Status', []);

        $this->validate($request, [
            'Date' => 'required',
            'Status' => 'required',
        ]);


        foreach ($attendanceData as $studentID => $Status) {

            $existingAttendance = Attendance::where('StudentID', $studentID)
                ->whereDate('Date', $request->Date)
                ->first();

            if ($existingAttendance) {
                return redirect()->back()
                    ->with('error', 'Attendance for this class on this date already exists.');
            } else {
                Attendance::create([
                    'StudentID' => $studentID,
                    'Date' => $request->Date,
                    'Status' => $Status,
                ]);
            }

        }

        // dd($attendanceData);


        return redirect()->route('attendance.index')->with('success', 'Attendance recorded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
    public function studentReportIndex(Request $request)
    {
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

        $query->with('class', 'section');

        if (!empty($request->query('ClassID'))) {
            $query->whereHas('class', function ($classQuery) use ($request) {
                $classQuery->where('studentmaster.ClassID', '=', $request->input('ClassID'));
            });
        }
        if (!empty($request->query('SectionID'))) {
            $query->whereHas('section', function ($classQuery) use ($request) {
                $classQuery->where('studentmaster.SectionID', '=', $request->input('SectionID'));
            });
        } else {
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

        return view('attendance.report.studentindex', compact('data', 'students', 'classes', 'sections'));
    }

    public function studentReport(Request $request,string $id)
    {

        // dd($request);
        // $dateInput = $request->input('dateInput');

        // // Create a DateTime instance from the input date
        // $date = \DateTime::createFromFormat('Y-m-d', $dateInput);

        // // Extract the month and year
        // $month = $date->format('m'); // Month as a two-digit number (01 - 12)
        // $year = $date->format('Y');

        $studentId = $id;
        $month = date('n');
        $year = date('Y');

        $studentMonthlyReport = DB::table('student_attendance')
            ->select('date', 'status')
            ->where('StudentID', $studentId)
            ->whereYear('date', $year)
            ->whereMonth('date', $month)
            ->groupBy('status')
            ->groupBy('date')
            ->orderBy('date')
            ->get();


        $student = StudentMaster::leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->find($studentId);
        return view('attendance.report.studentreport', compact('studentMonthlyReport', 'student'));

    }


    public function classReportIndex(Request $request)
    {
        $classes = Classes::all();
        return view('attendance.report.classindex', compact('classes'));
    }
    public function classReport(Request $request)
    {

        $month = date('n');
        $year = date('Y');
        $classId = $request->ClassID;
        $sectionId = $request->SectionID;

        if (!empty($request->ReportID)) {
            if ($request->ReportID == 1) {

            }
            if ($request->ReportID == 2) {
                $Report = DB::table('student_attendance')
                    ->select('date', DB::raw('SUM(CASE WHEN status = "P" THEN 1 ELSE 0 END) as present_count'), DB::raw('SUM(CASE WHEN status = "A" THEN 1 ELSE 0 END) as absent_count'))
                    ->whereYear('date', $year)
                    ->whereMonth('date', $month)
                    ->whereExists(function ($query) use ($classId, $sectionId) {
                        $query->select(DB::raw(1))
                            ->from('studentmaster')
                            ->whereColumn('studentmaster.StudentID', 'student_attendance.StudentID')
                            ->where('studentmaster.ClassID', $classId)
                            ->where('studentmaster.SectionID', $sectionId);
                    })
                    ->groupBy('date')
                    ->get();
            }
            if ($request->ReportID == 3) {
                $Report = DB::table('student_attendance')
                    ->select(DB::raw('MONTH(date) as month'), DB::raw('SUM(CASE WHEN status = "P" THEN 1 ELSE 0 END) as present_count'), DB::raw('SUM(CASE WHEN status = "A" THEN 1 ELSE 0 END) as absent_count'))
                    ->whereYear('date', $year)
                    ->whereExists(function ($query) use ($classId, $sectionId) {
                        $query->select(DB::raw(1))
                            ->from('studentmaster')
                            ->whereColumn('studentmaster.StudentID', 'student_attendance.StudentID')
                            ->where('studentmaster.ClassID', $classId)
                            ->where('studentmaster.SectionID', $sectionId);
                    })
                    ->groupBy(DB::raw('MONTH(date)'))
                    ->get();
            }
        } else {

            $Report = DB::table('student_attendance')
                ->select('date', DB::raw('SUM(CASE WHEN status = "P" THEN 1 ELSE 0 END) as present_count'), DB::raw('SUM(CASE WHEN status = "A" THEN 1 ELSE 0 END) as absent_count'))
                ->whereYear('date', $year)
                ->whereMonth('date', $month)
                ->whereExists(function ($query) use ($classId, $sectionId) {
                    $query->select(DB::raw(1))
                        ->from('studentmaster')
                        ->whereColumn('studentmaster.StudentID', 'student_attendance.StudentID')
                        ->where('studentmaster.ClassID', $classId)
                        ->where('studentmaster.SectionID', $sectionId);
                })
                ->groupBy('date')
                ->get();

                // dd($Report);
        }



        $class = Classes::find($classId);
        $section = Sections::find($sectionId);
        return view('attendance.report.classreport', compact('Report', 'class', 'section'));

    }


}
