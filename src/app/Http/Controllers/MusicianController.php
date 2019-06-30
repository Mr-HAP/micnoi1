<?php

namespace App\Http\Controllers;

use App\Band;
use App\Offer;
use App\Role;
use Illuminate\Http\Request;

class MusicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musicians = Band::all();
        return view('musician-list', compact('musicians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role_musico = Role::where('name', 'musico')->first();
        $request->validate([
            'country'       => 'required',
            'name'          => 'required',
            'region'        => 'required',
            'city'          => 'required',
            'hosting'       => 'required',
            'amplification' => 'required',
            'id_admin_band' => 'required'
        ]);
        $band = new Band([
            'country' => $request->get('country'),
            'name' => $request->get('name'),
            'region' => $request->get('region'),
            'city' => $request->get('city'),
            'photo' => $request->get('photo'),
            'video' => $request->get('video'),
            'songs_number' => $request->get('songs_number'),
            'members' => $request->get('members'),
            'eps' => $request->get('eps'),
            'discs' => $request->get('discs'),
            'facebook' => $request->get('facebook'),
            'instagram' => $request->get('instagram'),
            'youtube' => $request->get('youtube'),
            'tocatas' => $request->get('tocatas'),
            'concerts' => $request->get('concerts'),
            'hosting' => $request->get('hosting'),
            'amplification' => $request->get('amplification'),
            'id_admin_band' => $role_musico->users->first()->id
        ]);
        $band->save();
        //return redirect('/shares')->with('success', 'Stock has been added');
        return Redirect::to('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $band = Band::find($id);
        return view('musician',compact('band'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $band = Band::find($id);
        $band->update($request->all());
        return view('musician',compact('band'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
