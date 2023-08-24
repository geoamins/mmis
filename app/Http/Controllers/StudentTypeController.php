<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentType;

class StudentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!empty($request->query('search'))){
            $search=$request->query('search');
            $data=StudentType::where('StudentType','like','%'.$search.'%')
            ->orderBy('StudentTypeID','DESC')
            ->paginate(5);
        }
        else{
            $data=StudentType::orderBy('StudentType','DESC')->paginate(5);
        }
        return view('basic.studenttype.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('basic.studenttype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'StudentType' => 'required|max:255',
        ]);

        StudentType::create(['StudentType' => $request->input('StudentType')]);

        return redirect()->route('studenttype.index')
            ->with('success', 'Student Type created successfully.');
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
        $data = StudentType::find($id);
        return view('basic.studenttype.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'StudentType' => 'required'
        ]);

        $data = StudentType::find($id);
        $data->StudentType = $request->input('StudentType');
        $data->save();

        return redirect()->route('studenttype.index')
            ->with('success', 'Student Types updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        StudentType::find($id)->delete();

        return redirect()->route('studenttype.index')
            ->with('success', 'Student Type deleted successfully');
    }
}
