<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobVacancy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class FormUnggahanController extends Controller
{
    //buat fungsi store
    public function store(Request $request) {
        DB::beginTransaction();
        try {

            // init model
            // yang kiri nama kolom di database
            // yang kanan nama dari blade / view / tampilan
            $jobVacancy = new JobVacancy();
            // $corpId = auth::user()->corp_id;
            // Field 'job_type_id' doesn't have a default value -> dia gk ada default value nya alias null
            // var_dump($corpId);
            $jobVacancy->corp_id = Auth::user()->corp->id;
            // dd($jobVacancy->corp_id);
            // $jobVacancy->corp_id = $request->corp_id;
            $jobVacancy->job_type_id = $request->job_type;
            $jobVacancy->job_cat_id = $request->job_category;
            $jobVacancy->description_job = $request->des;
            $jobVacancy->position = $request->job_position;
            $jobVacancy->kuota = $request->kuota;
            $jobVacancy->last_education = $request->education;
            $jobVacancy->deadline = $request->deadline;
            $jobVacancy->starting_salary = $request->gaji_awal;
            $jobVacancy->final_salary = $request->gaji_akhir;
            $jobVacancy->provinces = $request->provinces;
            $jobVacancy->city = $request->city;
            $jobVacancy->location = $request->job_location;
            $jobVacancy->gender = $request->gender;
            $jobVacancy->age = $request->age;
            $jobVacancy->syarat = $request->syarat;
            $jobVacancy->email = $request->email;
            $jobVacancy->telp = $request->telepon;

            $jobVacancy->save();
            DB::commit();

            // nanti tinggal nambah return view / json / redirect

            return view('vacancy.landingPageCorp');

        } catch (\Throwable $th) {
            DB::rollBack();
            DD('error : ' . $th->getMessage());
            // disini diisi return ketika ada error
            // dd('error : ' . $th->getMessage());
        }
    }

    //


}