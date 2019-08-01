<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{



    public function postSignUp(Request $request)
    {


        $this->validate($request, [

            'email' => 'required',
            'first_name' => 'required',
            'password' => 'required'


        ]);



        $email= $request['email'];
        $first_name= $request['first_name'];
        $password= bcrypt($request['password']);

        $user= new User();
        $user->email= $email;
        $user->first_name= $first_name;
        $user->password=$password;

        $user->save();

        return redirect('/dashboard');

    }


    public function postSignIn(Request $request)
    {



       if ( Auth::attempt(['email' => $request['email'], 'password'=> $request['password']])) {


           return redirect()->route('/dashboard');


       }


       return redirect()->back();






    }



    public function dashboard() {


        return view('/dashboard');


    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
