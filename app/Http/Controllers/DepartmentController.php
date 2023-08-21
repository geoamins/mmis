<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!empty($request->query('search'))){
            $search=$request->query('search');
            $data=Department::where('DepartmentName','like','%'.$search.'%')
            ->orderBy('DeptID','DESC')
            ->paginate(5);
        }
        else{
            $data=Department::orderBy('DeptID','DESC')->paginate(5);
        }
        return view('basic.department.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('basic.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'DepartmentName' => 'required|max:255',
        ]);

        Department::create(['DepartmentName' => $request->input('DepartmentName')]);

        return redirect()->route('department.index')
            ->with('success', 'Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Department::find($id);
        return view('basic.department.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'DepartmentName' => 'required'
        ]);

        $data = Department::find($id);
        $data->DepartmentName = $request->input('DepartmentName');
        $data->save();

        return redirect()->route('department.index')
            ->with('success', 'Department updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Department::find($id)->delete();

        return redirect()->route('department.index')
            ->with('success', 'Department deleted successfully');
    }
}
