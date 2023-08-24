<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!empty($request->query('search'))){
            $search=$request->query('search');
            $data=Classes::where('ClassName','like','%'.$search.'%')->orderBy('ClassID','DESC')->paginate(5);
        }
        else{
            $data=Classes::orderBy('ClassID','DESC')->paginate(5);
        }
        return view('basic.sclass.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('basic.sclass.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ClassName' => 'required|max:255',
        ]);

        Classes::create(['ClassName' => $request->input('ClassName')]);

        return redirect()->route('class.index')
            ->with('success', 'Class created successfully.');
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
        $data = Classes::find($id);

        return view('basic.sclass.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'ClassName' => 'required|max:255'
        ]);

        $data = Classes::find($id);
        $data->ClassName = $request->input('ClassName');
        $data->save();

        return redirect()->route('class.index')
            ->with('success', 'Class updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Classes::find($id)->delete();

        return redirect()->route('class.index')
            ->with('success', 'Class deleted successfully');
    }
}
