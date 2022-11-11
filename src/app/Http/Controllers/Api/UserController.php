<?php

namespace App\Http\Controllers\Api;

use App\Band;
use App\Offer;
use App\Role;
use App\User;
use App\RoleUser;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $roles = [
        'musico' => 'Perfil de musico',
        'fan' => 'Perfil de fan'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $user = User::find(auth()->user()->id);
//        $user = User::with();
//        $userdetails = UserDetail::where('id_user', auth()->user()->id)->get()->first();
//        $mybands = Band::where('id_admin_band', auth()->user()->id)->get();
//        $myoffers = Offer::where('user_id', auth()->user()->id)->get();
//
//        return view('user-profile', compact('user', 'userdetails', 'mybands', 'myoffers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => ['required'],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required'],
            'role' => ['required', Rule::in(array_keys($this->roles))],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = (new User())->fill($validatedData);
        $user->save();

        $roleUser = new RoleUser();
        $roleUser->setAttribute('user_id', $user->id);
        $roleUser->setAttribute('role_id', Role::where('name', '=', $request->role)->first()->id);
        $roleUser->save();

        // @TODO later try to return the role as well
        return response($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // @TODO: add offers and bands
        $user = User::with('details')->with('roles')->where('id', '=', $id)->get();

        return response($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
