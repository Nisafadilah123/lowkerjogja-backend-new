<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class VacancyController extends Controller
{
    public function vacancy()
    {
        dd(Auth::user());
        return view('vacancy.landingPageCorp');
    }


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

     // halaman search candidate
     public function searchCandidate()
     {
         return view('vacancy.searchCandidate');
     }

     //halaman profil candidate
     public function profilCandidate(){
         return view('vacancy.profilCandidate');
     }

     // halaman profil corp
     public function profilCorp()
     {
         return view('vacancy.profilCorp');
     }

     // halaman job corp
     public function jobCorp()
     {
         return view('vacancy.jobCorp');
     }

     // halaman job corp
     public function editCorp()
     {
         return view('vacancy.editCorp');
     }



}
