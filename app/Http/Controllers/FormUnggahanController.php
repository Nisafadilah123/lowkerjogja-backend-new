<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobVacancy;
use Illuminate\Support\Facades\DB;

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
            $corpId = auth()->user();
            dd($corpId);
            $jobVacancy->position = $request->job_position;
            $jobVacancy->kuota = $request->kuota;
            $jobVacancy->last_education = $request->education;
            $jobVacancy->job_type = $request->job_type;
            $jobVacancy->deadline = $request->deadline;
            $jobVacancy->job_category = $request->job_category;
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

        } catch (\Throwable $th) {
            DB::rollBack();
            DD('error : ' . $th->getMessage()); 
            // disini diisi return ketika ada error
            // dd('error : ' . $th->getMessage());
        }
    }

    // 
    
    
}