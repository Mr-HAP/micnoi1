<?php

namespace App\Http\Controllers;

use App\Offer;
use App\State;
use App\OfferImages;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\RedirectResponse;


class OfferController extends Controller
{
    private $genders = [
        'femenino' => 'Femenino',
        'masculino' => 'Masculino',
        'lgbti' => 'LGBTI'
    ];
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
        $allOffers = true;

        $request->session()->forget('offer');
        $request->session()->forget('images');
        if ($request->input() !== null) {
            $offers = $this->filter($offers, $request);
        }
        return view('offer-list', compact('offers', 'states', 'action', 'allOffers'));
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
        $filtered = $offers;
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

        $myOffers = true;

        return view('offer-list', compact('offers', 'states', 'action', 'myOffers'));
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

        foreach ($request->get('images') as $image) {
            (new OfferImages([
                'offer_id' => $offer->offer_id,
                'image' => $image
            ]))->save();
        }

        return redirect('/offer-list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(Request $request, $id)
    {
        $action = URL::to('/update-offer/update/' . $id);
        $states = State::all();
        $offer = Offer::find($id);

        $request->session()->put('genders', $this->genders);

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

        $validatedData = $request->validate([
            'type' => 'required',
            'title' => 'required',
            'description' => 'required',
            'state_id' => 'required',
        ]);

        if ($request->get('host_gender')) {
            $offer->host_gender = $request->get('host_gender');
        }

        if ($request->get('guest_gender')) {
            $offer->guest_gender = $request->get('guest_gender');
        }
        
        $offer->fill($validatedData)->save();

        if (isset($request->{'delete-images'})) {
            $found = $offer->images()->findOrFail($request->{'delete-images'});

            $found->each(function ($image) {
                $image->delete();
            });
        }

        if (isset($request->images)) {
            $images = $this->loadImage($request);
            foreach ($images as $imageName) {
                (new OfferImages([
                    'offer_id' => $offer->offer_id,
                    'image' => $imageName
                ]))->save();
            }
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

        $typeDescription = '';
        switch ($offer->type) {
            case 'offer':
                $typeDescription = 'Ofrezco un Lugar';
                break;

            case 'request':
                $typeDescription = 'Busco un Lugar';
                break;

            case 'other':
                $typeDescription = 'Otro / Miscelaneo';
                break;
        }

        $request->session()->put('typeDescription', $typeDescription);
        $request->session()->put('offer', $offer);
        $request->session()->put('genders', $this->genders);

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
            'host_gender' => 'sometimes|required',
            'guest_gender' => 'sometimes|required',
        ]);
        if (empty($request->session()->get('offer'))) {
            return redirect('/createoffer3');
        } else {
            $offer = $request->session()->get('offer');
            $offer->fill($validatedData);

            if ($request->get('host_gender')) {
                $offer->host_gender = $request->get('host_gender');
            }

            if ($request->get('guest_gender')) {
                $offer->guest_gender = $request->get('guest_gender');
            }

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

        if ($offer->images->isEmpty()) {
            $images = [];
            if($request->files->count() > 0) {
                $images = $this->loadImage($request);
            }
            $images = array_merge($images, $request->session()->get('images') ?: []);
            $request->session()->put('images', $images);
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
     * @param $requestImages
     * @return string
     */
    public function loadImage($requestImages): array
    {
//        $requestImages->validate([
//            'images.*' => 'required|image|mimes:jpeg,png,jpg,|max:2048',
//        ]);

        $filesNames = [];
        foreach ($requestImages->images as $image) {
            if (is_string($image)) {
                continue;
            }
            $fileName = "offer-" . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('img-offer', $fileName);
            $filesNames[] = $fileName;
        }

        return $filesNames;
    }
}
