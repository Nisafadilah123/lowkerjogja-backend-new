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
use RealRashid\SweetAlert\Facades\Alert;


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

    //halaman product & service yang sudah login
    public function service()
    {
        return view('vacancy.service');
    }
    //halaman product & service yang belum login
    public function serviceno()
    {
        return view('vacancy.serviceno');
    }


    public function servicecorp()
    {
        return view('vacancy.servicecorp');
    }

    // halaman about
    public function about()
    {
        return view('vacancy.about');
    }

    public function about_login()
    {
        return view('vacancy.about_login');
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
        $myString = auth()->user()->email;
        $uid = auth()->user()->id;

        $job_types = DB::table('job_types')->get();
        return view('vacancy.formUnggahan',compact(array('job_types', 'myString')));
    }

    //
    public function getJobCategory(Request $request)
    {
        $job_category = DB::table('job_category')->where('tipe_pekerjaan_id', $request->job_type_selected)->get();
        return response()->json($job_category);

    }

     // halaman search candidate
    public function searchCandidate(Request $request)
    {
        $myString = auth()->user()->email;
        $uid = auth()->user()->id;

        $idu = $request->iduser;

        $corpId = Auth::user()->corp->id;
        // dd(Auth::user()->corp->id);
        $keyword=$request->cari;
        $kandidat = Candidate::whereHas('apply_jobs', function($q)
        use ($corpId, $keyword){
            $q->whereHas('jobs', function ($q)
            use($corpId, $keyword){
                $q->where('position', 'like', '%'.$keyword.'%');
                $q->where('corp_id', $corpId);
            });
        })
        ->with(['apply_jobs' => function ($q)use($keyword){
            $q->with('user.skill')
            ->with(['jobs' => function ($q)use($keyword){
                $q->where('position', 'like', '%'.$keyword.'%');
            }]);
        }])
        ->get();

        if(count($kandidat)){
            return view('vacancy.searchCandidate',['kandidat' => $kandidat]);
        }else{
            alert()->info('Data tidak ada', 'Posisi yang anda cari tidak ada');
        return redirect('/candidate');
        }

        return view('vacancy.searchCandidate', ['kandidat' => $kandidat]);
    }

     //halaman profil candidate
    public function profilCandidate($id){
        $kandidat = Candidate::findorfail($id);
        $corpId = Auth::user()->corp->id;
        $kandidat = Candidate::whereHas('apply_jobs', function($q)
        use ($corpId){
            $q->whereHas('jobs', function ($q)
            use($corpId){
                $q->where('corp_id', $corpId);
            });
        })
        ->with(['apply_jobs' => function ($q){
            $q->with('user.skill', 'user.education')
            ->with(['jobs' => function ($q){
            }]);
        }])
        ->where('id', $id)
        ->first();

        // dd($kandidat);
        // -- start --
        // get seluruh list provinsi dari helper rajaongkir-nya
        $listProvinces = rajaongkir_point( 'province', 'GET', [] );
        // get seluruh list provinsi dari helper rajaongkir-nya
        $listCity = rajaongkir_point( 'city', 'GET', [] );

        // dd($listCity);
        // ambil data id provinsi, untuk memudahkan pencarian provinsi
        $listProvinceIds = array_column($listProvinces, 'province_id');
        // dd($listProvinceIds);
         // ambil data id city, dari id provinsi untuk memudahkan pencarian provinsi
        $listCityIds = array_column($listCity, 'city_id');
        // dd($listCityIds);
        // loop data jobs
        // foreach ($kandidat as $key => $k) {
            // set default province-name
            $provinceName = "( Provinsi tidak ditemukan )";
            // set default province-name
            $cityName = "( Kota tidak ditemukan )";
            // ambil id provinsi dari data "job"
            $jobProvinceId = $kandidat->apply_jobs->user->provinsi;
            // dd($jobProvinceId);
            // ambil id kota dari data provinsi "job"
            $jobCityId = $kandidat->apply_jobs->user->kota;
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
            $kandidat->apply_jobs->user->province_name = $provinceName;
            $kandidat->apply_jobs->user->city_name = $cityName;

            // dd($provinceName);
            // dd($job);
        // }
        // -- end --
// dd($kandidat);
        return view('vacancy.profilCandidate', ['kandidat' => $kandidat]);
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
                    'status' => 'Diterima'
                ]);
        } else if ($tolak) {
            $status = DB::table('candidates')
                ->where('id', $tolak)
                ->update([
                    'status' => 'Ditolak'
                ]);
        }
        alert()->success('Berhasil', 'Status Verfikasi berhasil diubah');
        return redirect('/candidate');
    }
}
