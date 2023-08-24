<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(!empty($request->query('search'))){
            $search=$request->query('search');
            $data=Session::where('SessionTitle','like','%'.$search.'%')
            ->orderBy('SessionID','DESC')
            ->paginate(5);
        }
        else{
            $data=Session::orderBy('SessionID','DESC')->paginate(5);
        }
        return view('basic.session.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('basic.session.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'SessionTitle' => 'required|max:255',
        ]);

        Session::create(['SessionTitle' => $request->input('SessionTitle')]);

        return redirect()->route('session.index')
            ->with('success', 'Session created successfully.');
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
        $data = Session::find($id);
        return view('basic.session.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'SessionTitle' => 'required'
        ]);

        $data = Session::find($id);
        $data->SessionTitle = $request->input('SessionTitle');
        $data->save();

        return redirect()->route('session.index')
            ->with('success', 'Session updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Session::find($id)->delete();

        return redirect()->route('session.index')
            ->with('success', 'Session deleted successfully');
    }
}
