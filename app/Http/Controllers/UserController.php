<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Corp;
use App\Models\Jobs;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use DB;
use App\Post;
use \App\lowker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
        // halaman home
        public function home()
        {
            $corps = Corp::all();
            $jobs = Jobs::all();
            return view('main.home',compact('corps', 'jobs'));
            // return view('main.home');
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

        // halaman jobs
        public function jobs()
        {
            return view('user.jobs');
        }


        public function password()
        {
            return view('user.password');
        }

    public function lihatjobs(Request $request){

        // $id = DB::table('jobs')
        // ->where('id_jobs', $id_jobs)->first();

        $lihatjobs = DB::table('jobs')
        ->select('id', 'job_type', 'created_at', 'position', 'city', 'provinces', 'salary_range' )
        ->get();

        // $logo = DB::table('companies')->select('logo')
        // ->get();

        // $namacorp = DB::table('job_id')->select('corp_id')
        // ->get();


        return view('user.findjobs',
        ['lihatjobs'=> $lihatjobs]);
    }

    public function lamar_view($id){
        $idjob = DB::table('jobs')->where('id', $id)
        ->get();

        return view('user.lamar', ['jobs' => $idjob]);
    }

    public function insertcv(Request $request){

        $myString = auth()->user()->email;
        $namauser = auth()->user()->name;
        $uid = auth()->user()->id;

        $userid = DB::table('users')->select('id')
            ->where('id', $uid)
            ->orWhere('email', $myString)
            ->orWhere('name', $namauser)
            ->get();

        $data = new lowker;
        if ($request->file('cv')) {
            $file = $request->file('cv');
            $namauser = $namauser;
            $ext = $file->getClientOriginalExtension();
            $nama_file = $namauser . "." . $file->getClientOriginalExtension();
            $path = 'CV';
            $file->getMimeType();
            $file->move($path, $nama_file);
            $data->file = $nama_file;
        }

        DB::table('apply_jobs')->insert(
            [
                'user_id' => $uid,
                'job_id' => $request->idjob,
                'cv' => $data->file,
                'status' => $request->letter
            ]
        );

        return redirect('/findjobsUser')->with('success', 'CV anda berhasil dikirim');
    }

    public function detail_view($id)
    {
        $jobs = DB::table('jobs')->where('id', $id)->get();
        return view('user.detail', ['jobs' => $jobs]);
    }

    public function edit($id){
        $users = User::find($id);
        return view('user.editPassword', compact('users'));

    }

}