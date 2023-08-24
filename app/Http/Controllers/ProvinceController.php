<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!empty($request->query('search'))){
            $search=$request->query('search');
            $data=Province::where('ProvinceName','like','%'.$search.'%')
            ->orderBy('ProvinceID','DESC')
            ->leftjoin('setup_country','setup_country.CountryID','=','setup_province.CountryID')
            ->paginate(5);
        }
        else{
            $data=Province::leftjoin('setup_country','setup_country.CountryID','=','setup_province.CountryID')->paginate(5);
        }
        return view('basic.province.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries=Country::get();
        return view('basic.province.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ProvinceName' => 'required|max:255',
            'CountryID'=>'required'
        ]);

        Province::create(['ProvinceName' => $request->input('ProvinceName'),
                          'CountryID' => $request->input('CountryID')]);

        return redirect()->route('province.index')
            ->with('success', 'Province created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $province)
    {
        $data = Province::find($province);
        return view('basic.province.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $this->validate($request, [
            'ProvinceName' => 'required'
        ]);

        $data = Province::find($id);
        $data->ProvinceName = $request->input('ProvinceName');
        $data->save();

        return redirect()->route('province.index')
            ->with('success', 'Province updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Province::find($id)->delete();

        return redirect()->route('province.index')
            ->with('success', 'Province deleted successfully');
    }

    // public function getProvinces(Request $request){
    //     $CountryID = $request->post('CountryID');
    //     $provinces = Province::where('')
    // }
}
