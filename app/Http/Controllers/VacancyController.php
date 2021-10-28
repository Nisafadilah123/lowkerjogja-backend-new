<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Corp;
use App\Models\Education;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $job_types = DB::table('jobs')->get();
        return view('vacancy.formUnggahan',compact('job_types'));
    }

     // halaman search candidate
    public function searchCandidate(Request $request)
    {
        $myString = auth()->user()->email;
        $uid = auth()->user()->id;

        $idu = $request->iduser;

        // $kandidat = DB::table('candidates')
        // ->join('users', 'users.id', '=', 'candidates.user_id')
        // // ->join('skills', 'skills.user_id', '=', 'users.id')
        // ->join('jobs', 'jobs.id', '=', 'candidates.apply_jobs_id')
        // ->join('corp', 'corp.id', '=', 'jobs.corp_id')
        // // ->select('users.id as id_user', 'users.name', 'users.profile_photo_path', 'candidates.id as id_candidate',
        // // 'jobs.position', 'corp.user_id as id_user_corp', 'skills.user_id as skill_user', 'skills.skill')
        // ->select('users.id as id_user', 'users.name', 'users.profile_photo_path', 'candidates.id as id_candidate',
        // 'jobs.position', 'corp.user_id as id_user_corp')
        // ->get()
        // ->where('id_user_corp', $uid);

        // $skill = DB::table('skills')
        // ->join('users', 'users.id', '=', 'skills.user_id')
        // ->select('users.id as id_user', 'skills.user_id as skill_user', 'skills.skill')
        // // ->where('skills.user_id', $idu)
        // ->get()
        // // ->where('skill_user', "=", 6)
        // ->toArray();

        // $skill = Skill::with('user')->orderBy('user_id');

        // $kandidat = Candidate::with('user')->with('skill')->with('jobs.corp')->with('corp')->get();
        // $kandidat = Candidate::with('user.skill')->with('corp.jobs')->get();

        $kandidat = Candidate::with(['apply_jobs' => function($q){
            $q->with('user.skill')
            ->with('jobs');
        }])->get();

        // dd($kandidat);
        return view('vacancy.searchCandidate', ['kandidat' => $kandidat]);
        // return view('vacancy.searchCandidate', ['kandidat' => $kandidat, 'skill' => $skill]);
    }

     //halaman profil candidate
    public function profilCandidate($id){
        $kandidat = DB::table('candidates')
        ->join('users', 'users.id', '=', 'candidates.user_id')
        ->join('education', 'education.user_id', '=', 'users.id')
        ->join('skills', 'skills.user_id', '=', 'users.id')
        ->join('apply_jobs', 'apply_jobs.user_id', '=', 'users.id')
        ->join('jobs', 'jobs.id', '=', 'candidates.apply_jobs_id')
        ->join('corp', 'corp.id', '=', 'jobs.corp_id')
        ->select('users.id', 'users.name', 'users.profile_photo_path', 'users.address', 'users.provinsi', 'users.kota', 'jobs.position',
        'skills.ahli', 'corp.user_id', 'education.graduate as lulusan', 'education.name as kampus', 'education.graduate', 'education.major', 'education.gpa', 'candidates.apply_jobs_id',
        'candidates.id as id_candidate', 'skills.level')
        ->where('candidates.id', $id)
        ->get();

        return view('vacancy.profilCandidate', ['kandidat' => $kandidat]);
    }

     // halaman profil corp
    public function profilCorp()
    {
        $corps = Corp::all();
        return view('vacancy.profilCorp', compact('corps'));
    }

     // halaman job corp
    public function jobCorp()
    {
        $corps = Corp::where('user_id', Auth::user()->id)->get();
        return view('vacancy.jobCorp', compact('corps'));
    }

     // halaman job corp
    public function editCorp($id)
    {
        $corps = Corp::findOrFail($id);
        return view('vacancy.editCorp');
    }

     // halaman job corp
    public function updateCorp(Request $request, $id)
    {
        $corps = Corp::find($id)->update($request->all());
         return view('vacancy.editCorp');
    }

    public function passwordCorp(){
        return view('vacancy.passwordCorp');
    }

    public function open($id)
    {
        $path = public_path('CV/' . $id . '.pdf');
        header("Content-type: application/pdf");
        header("Content-Length: " . filesize($path));
        readfile($path);
    }

    public function Setatur(Request $request)
    {
        $terima = $request->terima;
        $tolak = $request->tolak;

        if ($terima) {
            $status = DB::table('candidates')
                ->where('id', $terima)
                ->update([
                    'status' => 'diterima'
                ]);
        } else if ($tolak) {
            $status = DB::table('candidates')
                ->where('id', $tolak)
                ->update([
                    'status' => 'ditolak'
                ]);
        }
        alert()->success('Berhasil', 'Status Verfikasi berhasil diubah');
        return redirect('/candidate');
    }
}
