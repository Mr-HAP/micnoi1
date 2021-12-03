<?php
namespace App\Http\Controllers\Api;

use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class OfferController
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $offers = Offer::whereNotNull('offer_id')->with('images')->get();

        if ($request->input() !== null) {
            $offers = $this->filter($offers, $request);
        }

        return response($offers);
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
}
