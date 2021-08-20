<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function province(){
        $hasil = rajaongkir_point("province");
        return response()->json($hasil);
    }

    public function city(Request $request){
        $hasil = rajaongkir_point("city",["province=$request->prov_id"]);
        return response()->json($hasil);
    }
        // halaman home
        public function home()
        {
            return view('user.home');
        }

        // halaman findjobs
        public function findjobs()
        {
            return view('user.findjobs');
        }

        // halaman about
        public function about()
        {
            return view('user.about');
        }

        // halaman profile
        public function profile()
        {
            return view('user.profile');
        }

        // halaman jobs
        public function jobs()
        {
            return view('user.jobs');
        }

        // halaman logout
        public function logout()
        {
            return view('user.logout');
        }

        // Menu Profile
        // halaman myProfile
        public function myprofile()
        {
            return view('user.myProfile');
        }

        // halaman editProfile
        public function editProfile(Request $request)
        {
            return view('user.editProfile', [
                'user' => $request->user()
            ]);
        }

        // halaman education
        public function education()
        {
            return view('user.education');
        }

        // halaman editEducation
        public function editEdu()
        {
            return view('user.editEducation');
        }

        // halaman skill
        public function skill()
        {
            return view('user.skill');
        }

        // halaman editSkill
        public function editSkill()
        {
            return view('user.editSkill');
        }

        // halaman password
        public function password()
        {
            return view('user.password');
        }

        // halaman editPassword
        public function editPassword()
        {
            return view('user.editPassword');
        }

        // halaman editProfile
        public function editPro(Request $request)
        {
            return view('user.editPro', [
                'user' => $request->user()
            ]);
        }

}