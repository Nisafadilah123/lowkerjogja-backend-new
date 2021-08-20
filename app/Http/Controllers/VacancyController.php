<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacancyController extends Controller
{
    //halaman landing page
    public function landingPage()
    {
        return view('vacancy.landingPage');
    }

    //halaman product & service
    public function service()
    {
        return view('vacancy.service');
    }

    // halaman about
    public function about()
    {
        return view('vacancy.about');
    }

    // halaman faq
    public function faq()
    {
        return view('vacancy.faq');
    }

    // halaman login
    public function login()
    {
        return view('vacancy.login');
    }

    // halaman sign up
    public function signup()
    {
        return view('vacancy.signup');
    }

    // halaman succes
    public function succes()
    {
        return view('vacancy.succes');
    }

     // halaman formUnggahan
     public function formUnggahan()
     {
         return view('vacancy.formUnggahan');
     }
}