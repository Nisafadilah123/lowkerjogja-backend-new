<?php

namespace App\Http\Controllers;

use App\Models\Corp;
use App\Models\Jobs;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class JobCorpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $corpId = Auth::user()->corp->id;
        // dd($corpId);
        $corps = Corp::where('user_id', Auth::user()->id)->get();
        // dd($corps);
        $lihatjobs = DB::table('jobs')
            ->join('corp', 'corp.id', '=', 'jobs.corp_id')
            ->join('job_types', 'job_types.id', '=', 'jobs.job_type_id')
            ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'job_types.tipe_pekerjaan', 'jobs.created_at', 'jobs.last_education', 'jobs.position','jobs.gender',
            'jobs.city', 'jobs.provinces', 'jobs.starting_salary', 'jobs.final_salary')
            ->where ('corp.id', $corpId)
            ->paginate(6);


            // dd($lihatjobs);
              // -- start --
        // get seluruh list provinsi dari helper rajaongkir-nya
        $listProvinces = rajaongkir_point( 'province', 'GET', [] );
        // get seluruh list provinsi dari helper rajaongkir-nya
        $listCity = rajaongkir_point( 'city', 'GET', [] );

        // dd($listCity);
        // ambil data id provinsi, untuk memudahkan pencarian provinsi
        $listProvinceIds = array_column($listProvinces, 'province_id');
         // ambil data id city, dari id provinsi untuk memudahkan pencarian provinsi
         $listCityIds = array_column($listCity, 'city_id');
        // dd($listCityIds);
        // loop data jobs
        foreach ($lihatjobs as $key => $l) {
            // set default province-name
            $provinceName = "( Provinsi tidak ditemukan )";
            // set default province-name
            $cityName = "( Kota tidak ditemukan )";
            // ambil id provinsi dari data "job"
            $jobProvinceId = $l->provinces;
            // ambil id kota dari data provinsi "job"
            $jobCityId = $l->city;
            // dd($jobCityId);
            // cari data nama provinsi berdasarkan id
            $provinceIndex = array_search($jobProvinceId, $listProvinceIds);
            // cari data nama kota berdasarkan id
            $cityIndex = array_search($jobCityId, $listCityIds);
            // dd($cityIndex);

            if ($provinceIndex) {
                $provinceName = $listProvinces[$provinceIndex]->province ?? $provinceName;
                // dd($provinceName);
            }

            if ($cityIndex) {
                $cityName = $listCity[$cityIndex]->city_name ?? $cityName;
                // dd($cityName);
            }

            // update data jobs dengan menambahkan nama provinsi
            $l->province_name = $provinceName;
            $l->city_name = $cityName;

            // dd($cityName);
            // dd($job);
        }
        return view('vacancy.jobCorp', compact('corps', 'lihatjobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jobs = Jobs::with('corp')->where('id', $id)->get();
        // dd($jobs);
        return view('vacancy.editJobs', compact('jobs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $karir)
    {
        //
        $request->validate([
            'description_job' => 'required',
            'position' => 'required',
            'last_education' => 'required',
            'job_type' => 'required',
            'job_category' => 'required',
            'deadline' => 'required',
            'provinces' => 'required',
            'city' => 'required',
            'starting_salary' => 'required',
            'final_salary' => 'required',
            'kuota' => 'required',
            'age' => 'required',
            'location' => 'required',
            'syarat' => 'required',
            'email' => 'required',
            'telp' => 'required',

            ], [
                    'description_job.required' => 'Lengkapi Deskripsi Pekerjaan Perusahaan Anda',
                    'position.required' => 'Lengkapi Posisi Pekerjaan Perusahaan Anda',
                    'last_education.required' => 'Lengkapi Pendidikan Terakhir Minimal Pekerjaan Perusahaan Anda',
                    'job_type.required' => 'Lengkapi Tipe Pekerjaan Perusahaan Anda',
                    'job_category.required' => 'Lengkapi Kategori Pekerjaan Perusahaan Anda',
                    'deadline.required' => 'Lengkapi Deadline Pekerjaan Yang Akan Dilamar Di Perusahaan Anda',
                    'provinces.required' => 'Lengkapi Provinsi Pekerjaan Perusahaan Anda',
                    'city.required' => 'Lengkapi Kota Pekerjaan Perusahaan Anda',
                    'starting_salary.required' => 'Lengkapi Minimal Gaji Pekerjaan Perusahaan Anda',
                    'final_salary.required' => 'Lengkapi Maksimal Gaji Pekerjaan Perusahaan Anda',
                    'kuota.required' => 'Lengkapi Kuota Pekerjaan Perusahaan Anda',
                    'age.required' => 'Lengkapi Umur Minimal Pekerjaan Di Perusahaan Anda',
                    'location.required' => 'Lengkapi Lokasi Pekerjaan Perusahaan Anda',
                    'syarat.required' => 'Lengkapi Syarat Pekerjaan Perusahaan Anda',
                    'email.required' => 'Lengkapi Email Perusahaan Anda',
                    'telp.required' => 'Lengkapi Telpon Perusahaan Anda',

        ]);

        $karir->description_job = $request->description_job;
        $karir->position = $request->position;
        $karir->last_education = $request->last_education;
        $karir->job_type = $request->job_type;
        $karir->job_category = $request->job_category;
        $karir->deadline = $request->deadline;
        $karir->provinces = $request->provinces;
        $karir->city = $request->city;
        $karir->starting_salary = $request->starting_salary;
        $karir->final_salary = $request->final_salary;
        $karir->kuota = $request->kuota;
        $karir->age = $request->age;
        $karir->location = $request->location;
        $karir->syarat = $request->syarat;
        $karir->email = $request->email;
        $karir->telp = $request->telp;

        $karir->update();
        // dd($karir);
        Alert::success('Berhasil', 'Datamu telah terubah');
        return redirect('/karir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $karir)
    {
        //
        Jobs::destroy($karir->id);
        Alert::success('Berhasil', 'Datamu telah terhapus');
        return redirect('/karir')->with('status', 'sukses');
    }
}