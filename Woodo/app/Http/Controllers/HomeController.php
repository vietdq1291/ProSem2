<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): \Illuminate\Contracts\Support\Renderable
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function company()
    {
        return view('pages.company');
    }
    public function funitures()
    {
        return view('layouts.templates.pages.funitures');
    }
    
    public function contact()
    {
        return view('layouts.templates.pages.contact-us');
    }
    
    public function cart()
    {
        return view('pages.cart');
    }
    
    
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

}
