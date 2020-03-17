<?php

namespace App\Http\Controllers;

use App\Offer;
use App\State;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\RedirectResponse;


class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $offers = null;
        $states = State::all();
        $action = URL::to('offer-list');

        $offers = Offer::all();

        $request->session()->forget('offer');
        if ($request->input() !== null) {
            $offers = $this->filter($offers, $request);
        }
        return view('offer-list', compact('offers', 'states', 'action'));
    }

    /**
     * Display a listing offers by country/state.
     *
     * @param $offers
     * @param $request
     * @return Collection
     */
    private function filter($offers, $request)
    {
        $filtered = null;
        if ($request->get('state') !== null && $request->get('state') !== '') {
            $filtered = $offers->where('state_id', '=', $request->get('state'));
        }
        if ($request->get('type') !== null && $request->get('type') !== '') {
            $filtered = $filtered->where('type', '=', $request->get('type'));
        }

        return $filtered;
    }

    /**
     * Show a listing of offers from the same owner.
     *
     * @param Request $request
     * @return View
     */
    public function showById(Request $request)
    {
        $offers = null;
        $states = State::all();
        $action = URL::to('my-offers');
        $offers = Offer::where('user_id', auth()->user()->id)->get();

        if ($request->get('state') !== null & $request->get('state') != '') {
            $offers = $this->filter($offers, $request);
        }

        return view('offer-list', compact('offers', 'states', 'action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $offer = new Offer();
        $states = State::all();
        $action = URL::to('offer/store');

        return view('create-offer', compact('offer', 'action','states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Redirector
     */
    public function store(Request $request)
    {
        $offer = $request->session()->get('offer');
        $offer->save();

        return redirect('/offer-list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        $action = URL::to('/update-offer/update/' . $id);
        $states = State::all();
        $offer = Offer::find($id);

        return view('offer.edit',compact('offer','action','states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Redirector
     */
    public function update(Request $request, $id)
    {
        $offer = Offer::find($id);
        $offer->update($request->except('photo'));

        if (isset($request->photo)) {
            $offer->photo = $this->loadImage($request);
            $offer->save();
        }

        return redirect('/my-offers');
    }

    /**
     * It shows the form for create an Offer Step 1
     *
     * @param Request $request
     * @return View
     */
    public function createStep1(Request $request)
    {
        $offer = $request->session()->get('offer');

        return view('offer.create-offer-1stp',compact('offer'));
    }

    /**
     * Save data in Session varible for the offer Step 1
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function OffercreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
        ]);
        if (empty($request->session()->get('offer'))) {
            $offer = new Offer(['user_id' => auth()->user()->id]);
            $offer->fill($validatedData);

            $request->session()->put('offer', $offer);
        } else {
            $offer = $request->session()->get('offer');
            $offer->fill($validatedData);

            $request->session()->put('offer', $offer);
        }
        return redirect('/createoffer2');
    }

    /**
     * It shows the form for create an Offer Step 1
     *
     * @param Request $request
     * @return View
     */
    public function createStep2(Request $request)
    {
        $offer = $request->session()->get('offer');

        $states = State::all();

        return view('offer.create-offer-2stp',compact('offer', 'states'));
    }

    /**
     * Save data in Session varible for the offer Step 1
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function OffercreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'state_id' => 'required',
        ]);
        if (empty($request->session()->get('offer'))) {
            return redirect('/createoffer3');
        } else {
            $offer = $request->session()->get('offer');
            $offer->fill($validatedData);

            $request->session()->put('offer', $offer);
        }
        return redirect('/createoffer3');
    }

    /**
     * It shows the form for create an Offer Step 1
     *
     * @param Request $request
     * @return View
     */
    public function createStep3(Request $request)
    {
        $offer = $request->session()->get('offer');

        return view('offer.create-offer-3stp', compact('offer'));
    }

    /**
     * Save data in Session varible for the offer Step 1
     *
     * @param Request $request
     * @return View
     */
    public function OffercreateStep3(Request $request)
    {
        $offer = $request->session()->get('offer');

        $states = State::all();

        if (!isset($offer->photo)) {
            $offer = $request->session()->get('offer');
            $offer->photo = $this->loadImage($request);
            $request->session()->put('offer', $offer);
        }
        return view('offer.create-offer-4stp', compact('offer', 'states'));
    }

    /**
     * Remove image from session variable in Offer Form Stepper
     *
     * @param Request $request
     * @return View
     */
    public function removeImage(Request $request)
    {
        $offer = $request->session()->get('offer');

        $offer->photo = null;

        return view('offer.create-offer-3stp', compact('offer'));
    }

    /**
     * Remove image from session variable in Offer Form Stepper
     *
     * @param $requestPhoto
     * @return string
     */
    public function loadImage($requestPhoto)
    {
        $requestPhoto->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $fileName = "offer-" . time() . '.' . request()->photo->getClientOriginalExtension();
        $requestPhoto->photo->storeAs('img-offer', $fileName);

        return $fileName;
    }
}
