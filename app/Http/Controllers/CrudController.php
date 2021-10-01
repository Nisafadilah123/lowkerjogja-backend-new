<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Models\Corp;
use App\Models\Jobs;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
     public function home()
     {
            // menampilkan tabel corps dan jobs
            $corp = Corp::all();
            $jobs = Jobs::all();
            return view('main.home',compact('corp', 'jobs'));
            // return view('main.home');
     }

     // Corp
     public function createcompany()
     {
         return view('admin/form.create.create-company');
     }

     public function addcompany(Request $request)
    {
        // Logo | Foto
        $nm1 = $request->logo;
        $namafile1 = time() . rand(100, 999) . "." . $nm1->getClientOriginalExtension();

        $dtUpload = new Corp;
        $dtUpload->user_id = Auth::user()->id;
        $dtUpload->nama_corp    = $request->nama_corp;
        $dtUpload->description  = $request->description;
        $dtUpload->industri     = $request->industri;
        $dtUpload->location     = $request->location;
        $dtUpload->work_day     = $request->work_day;
        $dtUpload->founded_year = $request->founded_year;
        $dtUpload->logo         = $namafile1;


        $nm1->move(public_path() . '/template/img/logo', $namafile1);
        $dtUpload->save();
        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect('/company');
    }

    public function editcompany($id)
    {
        $corp = Corp::findorfail($id);
        return view('admin.form.edit.edit-company', compact('corp'));
    }

    public function updatecompany(Request $request, $id)
    {
        $ubah = Corp::findorfail($id);
        $awal1 = $ubah->logo;

        if ($request['logo'] != null) {

            $request->logo->move(public_path() . '/template/img/logo', $awal1);
        }

        $corp = [
            'nama_corp'     =>  $request['nama_corp'],
            'description'   =>  $request['description'],
            'logo'          =>  $awal1,
            'industri'      =>  $request['industri'],
            'location'      =>  $request['location'],
            'work_day'      =>  $request['work_day'],
            'founded_year'  =>  $request['founded_year'],
        ];
        $ubah->update($corp);

        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect('/company');
    }

    public function deletecompany($id)
    {
        $corp = Corp::find($id);
        $corp->delete();
        alert()->success('Berhasil', 'Data Berhasil dihapus');
        return redirect('/company');

    }

    //Jobs 
    
    //select provinsi dan kota
    public function province(){
        $hasil = rajaongkir_point("province");
        return response()->json($hasil);
    }

    public function city(Request $request){
        $hasil = rajaongkir_point("city",["province=$request->prov_id"]);
        return response()->json($hasil);
    }

    public function createjobs()
    {
        return view('admin/form.create.create-jobs');
    }

    public function addjobs(Request $request)
    {
        $dtUpload = new Jobs;
        $dtUpload->description_job      = $request->description_job;
        $dtUpload->position         = $request->position;
        $dtUpload->last_education   = $request->last_education;
        $dtUpload->job_type         = $request->job_type;
        $dtUpload->job_category     = $request->job_category;
        $dtUpload->deadline         = $request->deadline;
        $dtUpload->provinces        = $request->provinces;
        $dtUpload->city             = $request->city;
        $dtUpload->salary_range     = $request->salary_range;
        $dtUpload->kuota            = $request->kuota;
        $dtUpload->gender           = $request->gender;
        $dtUpload->age              = $request->age;
        $dtUpload->location         = $request->location;
        $dtUpload->syarat           = $request->syarat;
        $dtUpload->email            = $request->email;
        $dtUpload->telp             = $request->telp;


        $dtUpload->save();
        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect('/jobs');
    }

    public function editjobs($id)
    {
        $jobs = Jobs::findorfail($id);
        return view('admin.form.edit.edit-jobs', compact('jobs'));
    }

    public function updatejobs(Request $request, $id)
    {
        $ubah = Jobs::findorfail($id);

        // return $request;
        $jobs = [
            'description'       => $request['description'],
            'position'          => $request['position'],
            'last_education'    => $request['last_education'],
            'job_type'          => $request['job_type'],
            'job_category'      => $request['job_category'],
            'last_date'         => $request['last_date'],
            'deadline'          => $request['deadline'],
            'provinces'         => $request['provinces'],
            'city'              => $request['city'] ,
            'salary_range'      => $request['salary_range'],
            'kuota'             => $request['kuota'],
            'gender'            => $request['gender'],
            'age'               => $request['age'],
            'location'          => $request['location'],
            'email'             => $request['email'],
            'telp'              => $request['telp']
        ];
        $ubah->update($jobs);

        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect('/jobs');
    }

    public function deletejobs($id)
    {
        $jobs = Jobs::find($id);
        $jobs->delete();
        alert()->success('Berhasil', 'Data berhasil dihapus');
        return redirect('/jobs');
    }
}
