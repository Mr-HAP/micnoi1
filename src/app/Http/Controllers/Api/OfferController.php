<?php
namespace App\Http\Controllers\Api;

use App\Offer;
use App\OfferImages;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;

class OfferController
{
    private $genders = [
        'femenino' => 'Femenino',
        'masculino' => 'Masculino',
        'lgbti' => 'LGBTI'
    ];

    private $offerType = [
        'offer' => 'Ofrezco un Lugar',
        'request' => 'Busco un Lugar',
        'other' => 'Otro / Miscelaneo',
    ];

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $offers = Offer::with('images');

        if ($request->input() !== null) {
            $offers = $this->filter($offers, $request);
        }

        return response($offers->get());
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::with('images')->where('offer_id', '=', $id)->get();

        return response($offer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required'],
            'type' => ['required', Rule::in(array_keys($this->offerType))],
            'description' => ['required'],
            'state_id' => ['required', Rule::exists('states', 'state_id')],
            'host_gender' => ['sometimes', Rule::in(array_keys($this->genders))],
            'guest_gender' => ['sometimes', Rule::in(array_keys($this->genders))],
            'images[]' => ['sometimes','image:jpg','mime']
        ]);
        $images = $request->file('images');
        $fileImgNames = [];
        if ($images) {
            foreach ($images as $img){
                $fileName = 'offer-' . time() . '.' . $img->getClientOriginalExtension();
                $img->storeAs('img-offer', $fileName);
                $fileImgNames[] = $fileName;
            }
        }

        $offer = new Offer(['user_id' => auth()->user()->id]);
        $offer->fill($validatedData);
        $offer->save();
        foreach ($fileImgNames as $fileImgName) {
            OfferImages::create(['offer_id' => $offer->offer_id, 'image' => $fileImgName]);
//            $offer->images()->saveMany($offerImages->getAttributes());
        }
        $offer->images = $offer->images()->get();

        return response($offer);
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
        $offer = Offer::where('user_id', '=', auth()->user()->id)
            ->where('offer_id', '=', $id)
            ->first();

        if(!$offer) {
            return response('No es posible actualizar el recurso', 403);
        }

        $offer->title = !is_null($request->get('title')) ? $request->get('title') : $offer->title;
        $offer->type = !is_null($request->get('type')) ? $request->get('type') : $offer->type;
        $offer->state_id = !is_null($request->get('state_id')) ? $request->get('state_id') : $offer->state_id;
        $offer->description = !is_null($request->get('description')) ? $request->get('description') : $offer->description;
        $offer->host_gender = !is_null($request->get('host_gender')) ? $request->get('host_gender') : $offer->host_gender;
        $offer->guest_gender = !is_null($request->get('guest_gender')) ? $request->get('guest_gender') : $offer->guest_gender;

        if($offer->update()) {
            return $this->show($id);
        }

        return response('No es posible actualizar el recurso', 403);
    }
}
