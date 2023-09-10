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
             }else{
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
        //
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
}
