<?php

namespace App\Http\Controllers;

use App\Citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citizens = Citizen::all();
        return view('citizen.index',compact('citizens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citizen.register');
//        return Route('citizen.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customMessages =[
            'required' => 'Must Fill or Maria will Get Angry'
        ];
        $request->validate([
            'fullName' => ['required', 'max:50','regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)(?:\s[a-zA-Z]+)(?:\s[a-zA-Z]+)$/'],
            'NID'       => 'required|digits:10',
            'city'      => 'required',
            'gender'    => 'required',
            'mobile'    => 'required|regex:/(077)[0-9]{7}/|digits:10',
            'address'   => 'required|max:50',
        ],$customMessages);

        Citizen::create($request->all());
        return redirect(Route('home'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function show(Citizen $citizen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function edit(Citizen $citizen)
    {
        return view('citizen.edit_citizen',compact('citizen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citizen $citizen)
    {

        $request->validate([
            'fullName' => ['required', 'max:50','regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)(?:\s[a-zA-Z]+)(?:\s[a-zA-Z]+)$/'],
            'NID'       => 'required|digits:10',
            'city'      => 'required',
            'gender'    => 'required',
            'mobile'    => 'required|regex:/(077)[0-9]{7}/|digits:10',
            'address'   => 'required|max:50',
        ]);

        $citizen->update($request->all());
        return redirect(Route('home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citizen $citizen)
    {
        $citizen->delete();
        return redirect(Route('home'));
    }
}
