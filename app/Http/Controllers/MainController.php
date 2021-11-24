<?php

namespace App\Http\Controllers;

use App\Models\Corp;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function provinsi(){
        $hasil = rajaongkir_point("province");
        return response()->json($hasil);
    }

    public function kota(Request $request){
        $hasil = rajaongkir_point("city",["province=$request->prov_id"]);
        return response()->json($hasil);
    }
    //
    public function home(Request $request)
    {
        $lihatjobs = DB::table('jobs')
            ->join('corp', 'corp.id', '=', 'jobs.corp_id')
            ->join('job_types', 'job_types.id', '=', 'jobs.job_type_id')
            ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'job_types.tipe_pekerjaan', 'jobs.created_at', 'jobs.last_education', 'jobs.position','jobs.gender',
            'jobs.city', 'jobs.provinces', 'jobs.starting_salary', 'jobs.final_salary')
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
        // -- end --
// dd($l);

            return view('main.home',
            ['lihatjobs'=> $lihatjobs]);
    }
    public function about()
    {
        return view('main.about');
    }

    public function findjobs()
    {
        $lihatjobs = DB::table('jobs')
            ->join('corp', 'corp.id', '=', 'jobs.corp_id')
            ->join('job_types', 'job_types.id', '=', 'jobs.job_type_id')
            ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'job_types.tipe_pekerjaan', 'jobs.created_at', 'jobs.last_education', 'jobs.position','jobs.gender',
            'jobs.city', 'jobs.provinces', 'jobs.starting_salary', 'jobs.final_salary')
            ->paginate(6);
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
        // -- end --
// dd($l);

            return view('main.findjobs',
            ['lihatjobs'=> $lihatjobs]);
    }

    public function succes()
    {
        return view('main.succes');
    }

    public function detailmain($id)
    {
        $jobs = DB::table('jobs')
        ->join('corp', 'corp.id', '=', 'jobs.corp_id')
        ->join('job_types', 'job_types.id', '=', 'jobs.job_type_id')
        ->select('corp.nama_corp', 'corp.description', 'corp.logo', 'jobs.description_job', 'jobs.id', 'job_types.tipe_pekerjaan',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
        'jobs.city', 'jobs.provinces','jobs.starting_salary', 'jobs.final_salary', 'jobs.gender', 'jobs.age', 'jobs.location', 'jobs.syarat', 'jobs.email', 'jobs.telp', 'jobs.deadline')
        ->where('jobs.id', $id)
        ->get();
        return view('main.detailmain', ['jobs' => $jobs]);
    }

    public function carimain(Request $request)
        {
            $cari = $request->cari;
            $lihatjobs = DB::table('jobs')
            ->join('corp', 'corp.id', '=', 'jobs.corp_id')
            ->join('job_types', 'job_types.id', '=', 'jobs.job_type_id')
            ->select('corp.nama_corp', 'corp.logo', 'jobs.id', 'job_types.tipe_pekerjaan',  'jobs.created_at', 'jobs.last_education', 'jobs.position',
            'jobs.city', 'jobs.provinces', 'jobs.starting_salary' ,'jobs.final_salary')
            ->where('position','like',"%".$cari."%")

            ->paginate(6);
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

        }
            if(count($lihatjobs)){
                return view('main.findjobs',['lihatjobs' => $lihatjobs]);
            }else{
                alert()->info('Data tidak ada', 'Posisi yang anda cari tidak ada');
            return redirect('/findjobs');
            }
            return view('main.findjobs',['lihatjobs' => $lihatjobs]);

        }
    }