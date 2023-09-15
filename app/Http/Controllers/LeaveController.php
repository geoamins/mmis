<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Leave::leftjoin('studentmaster', 'studentmaster.StudentID', '=', 'student_leave.StudentID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->orderBy('LeaveID', 'DESC')->paginate(10);

        return view('attendance.leavemanagment.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendance.leavemanagment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'FromDate' => 'required|date',
            'ToDate' => 'required|date',
            'Reason' => 'required',
            'Status' => 'required',
            'StudentID' => 'required',
        ]);

        Leave::create([
            'FromDate' => $request->FromDate,
            'ToDate' => $request->ToDate,
            'Reason' => $request->Reason,
            'Status' => $request->Status,
            'StudentID' => $request->StudentID,
        ]);

        return redirect()->route('leave.index')
            ->with('success', 'Leave Submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Leave::leftjoin('studentmaster', 'studentmaster.StudentID', '=', 'student_leave.StudentID')
            ->leftjoin('setup_class', 'setup_class.ClassID', '=', 'studentmaster.ClassID')
            ->leftjoin('setup_section', 'setup_section.SectionID', '=', 'studentmaster.SectionID')
            ->find($id);

        return view('attendance.leavemanagment.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'FromDate' => 'required|date',
            'ToDate' => 'required|date',
            'Reason' => 'required',
            'Status' => 'required',
        ]);

        $data = Leave::find($id);

        $data->FromDate = $request->input('FromDate');
        $data->ToDate = $request->input('ToDate');
        $data->Reason = $request->input('Reason');
        $data->Status = $request->input('Status');
        $data->save();

        return redirect()->route('leave.index')
            ->with('success', 'Student Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Leave::find($id)->delete();

        return redirect()->route('leave.index')
            ->with('success', 'Student deleted successfully');
    }
}
