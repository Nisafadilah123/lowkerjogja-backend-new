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
            $lihatjobs = DB::table('jobs')
            ->join('corp', 'corp.id', '=', 'jobs.corp_id')
            ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'jobs.job_type',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
            'jobs.city', 'jobs.provinces', 'jobs.salary_range')
            ->get();

            return view('user.home',
            ['lihatjobs'=> $lihatjobs]);
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
            $myString = auth()->user()->email;
            $namauser = auth()->user()->name;
            $uid = auth()->user()->id;

            $lihatsimpan = DB::table('save_jobs')
            ->join('jobs', 'jobs.id', '=', 'save_jobs.job_id')
            ->join('corp', 'corp.id', '=', 'jobs.corp_id')
            ->join('users', 'users.id', '=', 'save_jobs.user_id')
            ->select('users.id', 'corp.nama_corp', 'corp.logo', 'jobs.job_type',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
            'jobs.city', 'jobs.provinces', 'jobs.salary_range', 'save_jobs.id')
            ->where('save_jobs.user_id', $uid)
            ->get();

            return view('user.jobs',
            ['lihatsimpan'=> $lihatsimpan]);
        }


        public function password()
        {
            return view('user.password');
        }

    //     public function cari(Request $request){
    //     $user = DB::table('jobs')
    //             ->join('corp', 'corp.id', '=', 'jobs.corp_id')
    //             ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'jobs.job_type',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
    //             'jobs.city', 'jobs.provinces', 'jobs.salary_range')
    //             ->where("last_education",$request->last_education)
    //             ->where("provinces",$request->provinces)
    //             ->where("city", $request->city)
    //             ->get();

    //     return view('user.findjobs', compact('lihatjobs'));
    //  }

        public function cari(Request $request)
        {
            $lihatjobs = DB::table('jobs')
            ->join('corp', 'corp.id', '=', 'jobs.corp_id')
            ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'jobs.job_type',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
            'jobs.city', 'jobs.provinces', 'jobs.salary_range')
            ->get();
    
            if( $request->last_education){
                $lihatjobs = $lihatjobs->where('last_education', 'LIKE', "%" . $request->last_education . "%");
            }
            if( $request->provinces){
                $lihatjobs = $lihatjobs->where('provinces', 'LIKE', "%" . $request->provinces . "%");
            }
            if( $request->city){
                $lihatjobs = $lihatjobs->where('city', 'LIKE', "%" . $request->city . "%");
            }
           
            $lihatjobs = $lihatjobs;
            return view('user.findjobs', compact('lihatjobs'));
        }

        public function lihatjobs(Request $request){
            $lihatjobs = DB::table('jobs')
            ->join('corp', 'corp.id', '=', 'jobs.corp_id')
            ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'jobs.job_type',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
            'jobs.city', 'jobs.provinces', 'jobs.salary_range')
            ->get();

            return view('user.findjobs',
            ['lihatjobs'=> $lihatjobs]);
        }

        public function lamar_view($id){
            $lamarview = DB::table('jobs')
            ->join('corp', 'corp.id', '=', 'jobs.corp_id')
            ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'jobs.job_type',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
            'jobs.city', 'jobs.provinces', 'jobs.salary_range')
            ->where('jobs.id', $id)
            ->get();

            return view('user.lamar', ['lamarview' => $lamarview]);
        }

        public function insertcv(Request $request){

            $myString = auth()->user()->email;
            $namauser = auth()->user()->name;
            $uid = auth()->user()->id;
            $i = $request->idjob;

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

            DB::table('candidates')->insert(
                [
                    'user_id' => $uid,
                    'apply_jobs_id' => $i,
                    'status'=> $request->letter
                    
                ]
            );

            alert()->success('Berhasil', 'CV anda berhasil dikirim');
            return redirect('/findjobsUser');
        }



        public function detail_view($id)
        {
            $jobs = DB::table('jobs')
            ->join('corp', 'corp.id', '=', 'jobs.corp_id')
            ->select('corp.nama_corp', 'corp.description', 'corp.logo', 'jobs.description_job', 'jobs.id', 'jobs.job_type',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
            'jobs.city', 'jobs.provinces', 'jobs.salary_range', 'jobs.gender', 'jobs.age', 'jobs.location', 'jobs.syarat', 'jobs.email', 'jobs.telp', 'jobs.deadline')
            ->where('jobs.id', $id)
            ->get();
            return view('user.detail', ['jobs' => $jobs]);
        }

        public function simpanjob(Request $request){
            if(!Auth::user()){
                alert()->error('Gagal', 'Anda Harus Login Terlebih Dahulu');
        return redirect('/');
       }else{


            $myString = auth()->user()->email;
            $namauser = auth()->user()->name;
            $uid = auth()->user()->id;

            $userid = DB::table('users')->select('id')
                ->where('id', $uid)
                ->orWhere('email', $myString)
                ->orWhere('name', $namauser)
                ->get();

            DB::table('save_jobs')->insert(
                [
                    'user_id' => $uid,
                    'job_id' => $request->idjob,
                ]
            );
            alert()->success('Berhasil', 'Karir anda berhasil disimpan');
            return redirect('/findjobsUser');
        }
    }

        public function deletejob(Request $request){

            DB::table('save_jobs')->delete(
                [
                    'id' => $request->idsimpan
                ]
            );
            alert()->success('Berhasil', 'Karir anda berhasil dihapus');
            return redirect('/jobsUser');
        }

}