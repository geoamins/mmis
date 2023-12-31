<?php

namespace App\Http\Controllers;
use App\Models\Country;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!empty($request->query('search'))){
            $search=$request->query('search');
            $data=Country::where('CountryName','like','%'.$search.'%')->orderBy('CountryID','DESC')->paginate(5);
        }
        else{
            $data=Country::orderBy('CountryID','DESC')->paginate(5);
        }
        return view('basic.country.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('basic.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'CountryName' => 'required|max:255',
        ]);

        Country::create(['CountryName' => $request->input('CountryName')]);

        return redirect()->route('country.index')
            ->with('success', 'Country created successfully.');
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
        $data = Country::find($id);

        return view('basic.country.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $this->validate($request, [
            'CountryName' => 'required|max:255'
        ]);

        $data = Country::find($id);
        $data->CountryName = $request->input('CountryName');
        $data->save();

        return redirect()->route('country.index')
            ->with('success', 'Country updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Country::find($id)->delete();

        return redirect()->route('country.index')
            ->with('success', 'Country deleted successfully');
    }
}
