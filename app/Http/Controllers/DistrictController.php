<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!empty($request->query('search'))){
            $search=$request->query('search');
            $data=District::where('DistrictName','like','%'.$search.'%')
            ->orderBy('DistrictID','DESC')
            ->leftjoin('setup_province','setup_province.ProvinceID','=','setup_district.ProvinceID')
            ->paginate(5);
        }
        else{
            $data=District::leftjoin('setup_province','setup_province.ProvinceID','=','setup_district.ProvinceID')
            ->paginate(5);
        }
        return view('basic.district.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces=Province::get();
        return view('basic.district.create',compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'DistrictName' => 'required|max:255',
            'ProvinceID'=>'required'
        ]);

        District::create(['DistrictName' => $request->input('DistrictName'),
                          'ProvinceID' => $request->input('ProvinceID')]);

        return redirect()->route('district.index')
            ->with('success', 'District created successfully.');
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
        $data = District::find($id);
        return view('basic.district.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'DistrictName' => 'required'
        ]);

        $data = District::find($id);
        $data->DistrictName = $request->input('DistrictName');
        $data->save();

        return redirect()->route('district.index')
            ->with('success', 'District updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        District::find($id)->delete();

        return redirect()->route('district.index')
            ->with('success', 'District deleted successfully');
    }
}
