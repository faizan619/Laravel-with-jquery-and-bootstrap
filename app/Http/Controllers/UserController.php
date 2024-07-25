<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("vikas.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            "email"=> 'required|email',
            'password'=> 'required'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('project.index')->with('status','You are Successfully Logined!');
        }
        else{
            return redirect()->route('vikas.create')->with('status','Please Enter Correct Credentials!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function logoutUser(){
        Auth::logout();
        return redirect()->route('vikas.create');
    }
    public function showEmpForm(){
        return view('vikas.register');
    }
    public function enterEmployee(Request $request){
        $cred = $request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        $emp = new User();
        $emp->name = $request->name;
        $emp->username = $request->username;
        $emp->email = $request->email;
        $emp->password = bcrypt($request->password);
        $emp->save();
        return redirect()->route('project.index')->with('status','Employee is Registered!');
    }
}
