<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use vendor\project\StatusTest;
use Illuminate\Support\Facades\URL;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();
        return view('offer-list', compact('offers'));
    }
    /**
     * Show a listing of offers from the same owner.
     *
     * @return \Illuminate\Http\Response
     */
    public function showById()
    {
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offer = new Offer();

        $action = URL::to('offer/store');

        return view('create-offer', compact('offer', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer = new Offer([

            'user_id' => auth()->user()->id,
            'title'=> $request->get('title'),
            'description' => $request->get('description'),
//          'photo'=> $request->get('photo'),
            'photo'=> 'http://lorempixel.com/400/200/',
        ]);
        $offer->save();
        return redirect('offer-list/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = URL::to('/update-offer/update/' . $id);

        $offer = Offer::find($id);

        return view('create-offer',compact('offer','action'));
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
        $offer = Offer::find($id);

        $offer->update($request->all());

        $action = URL::to('/update-offer/update/' . $id);

        return view('create-offer',compact('offer','action'));
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
