<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VacancyController extends Controller
{
    public function vacancy()
    {
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

     // sistem search candidate
     public function search (Request $request){

        $user = DB::table('users')
                ->where("provinsi",$request->provinsi)
                ->where("kota", $request->kota )
                ->get();

        // $education = Education::select->get();

        return view("vacancy.searchCandidate",compact("user","education"));
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