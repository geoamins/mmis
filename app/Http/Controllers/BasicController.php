<?php

namespace App\Http\Controllers;
use App\Models\Basic;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Basic::orderBy('CountryID','DESC')->paginate(5);
        return view('basic.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('basic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'CountryName' => 'required|max:255',
        ]);

        Basic::create(['CountryName' => $request->input('CountryName')]);

        return redirect()->route('basic.index')
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
        $data = Basic::find($id);

        return view('basic.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $this->validate($request, [
            'CountryName' => 'required|max:255'
        ]);

        $data = Basic::find($id);
        $data->CountryName = $request->input('CountryName');
        $data->save();

        return redirect()->route('basic.index')
            ->with('success', 'Country updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Basic::find($id)->delete();

        return redirect()->route('basic.index')
            ->with('success', 'Country deleted successfully');
    }
}