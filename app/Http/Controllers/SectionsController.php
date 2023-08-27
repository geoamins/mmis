<?php

namespace App\Http\Controllers;
use App\Models\Sections;
use App\Models\Classes;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!empty($request->query('search'))){
            $search=$request->query('search');
            $data=Sections::where('SectionName','like','%'.$search.'%')
            ->orderBy('SectionID','DESC')
            ->leftjoin('setup_class','setup_class.ClassID','=','setup_section.ClassID')
            ->paginate(5);
        }
        else{
            $data=Sections::leftjoin('setup_class','setup_class.classID','=','setup_section.ClassID')
            ->orderBy('SectionID','DESC')
            ->paginate(5);
        }
        return view('basic.sections.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes=Classes::get();
        return view('basic.sections.create',compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'SectionName' => 'required|max:255',
            'ClassID'=>'required'
        ]);

        Sections::create(['SectionName' => $request->input('SectionName'),
                          'ClassID' => $request->input('ClassID')]);

        return redirect()->route('section.index')
            ->with('success', 'Section created successfully.');
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
        $data = Sections::find($id);
        return view('basic.sections.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'SectionName' => 'required'
        ]);

        $data = Sections::find($id);
        $data->SectionName = $request->input('SectionName');
        $data->save();

        return redirect()->route('section.index')
            ->with('success', 'Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sections::find($id)->delete();

        return redirect()->route('section.index')
            ->with('success', 'Section deleted successfully');
    }
}
