<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
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
        $offers = Offer::where('user_id', auth()->user()->id)->get();
        //dd($offers);
        return view('offer-list', compact('offers'));
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
        $resultUpload = $this->fileUpload($request, 'photo','img-offers');
        if ($resultUpload != false and $resultUpload != null) {
            $offer = new Offer([
                'user_id' => auth()->user()->id,
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'photo' => $resultUpload,
            ]);
            $offer->save();
            return redirect('offer-list/');
        }
    }

    public function fileUpload(Request $request,$inputName,$path) {

        $this->validate($request, [
            $inputName => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile($inputName)) {
            $image = $request->file($inputName);
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/' . $path), $name);
            $finalPath = '/' . $path . '/' . $name ;
            return $finalPath;
        }
        return false;
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
