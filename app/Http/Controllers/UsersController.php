<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session()->has('firstName') && session()->has('lastName')) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $request->session()->put('firstName', $request->get('firstName'));
        $request->session()->put('lastName', $request->get('lastName'));
    }

    public function logout()
    {
        if (!session()->has('firstName') && !session()->has('lastName')) {
            return redirect()->route('login');
        }

        session()->flush();
        return redirect()->route('login');

    }

    public function info(Request $request)
    {
        $request->session()->put([
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'email' => $request->get('email'),
        ]);

        return view('info');
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