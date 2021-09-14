<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Models\Corp;
use App\Models\Jobs;
use Alert;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
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

        // $dtUpload->id = $request->id;
        // $dtUpload->user_id = $request->user_id;
        // $dtUpload->jobs_id = $request->jobs_id;
        $dtUpload = new Corp;
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

    public function createjobs()
    {
        return view('admin/form.create.create-jobs');
    }

    public function addjobs(Request $request)
    {
        $dtUpload = new Jobs;
        // $dtUpload->id               = $request->id;
        $dtUpload->corp_id          = $request->corp_id;
        $dtUpload->description      = $request->description;
        $dtUpload->position         = $request->position;
        $dtUpload->last_education   = $request->last_education;
        $dtUpload->job_type         = $request->job_type;
        $dtUpload->job_category     = $request->job_category;
        $dtUpload->deadline         = $request->deadline;
        $dtUpload->job_location     = $request->job_location;
        $dtUpload->salary_range     = $request->salary_range;

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

        $jobs = [
            'description'       => $request['description'],
            'position'          => $request['position'],
            'last_education'    => $request['last_education'],
            'job_type'          => $request['job_type'],
            'job_category'      => $request['job_category'],
            'last_date'         => $request['last_date'],
            'deadline'          => $request['deadline'],
            'job_location'      => $request['job_location'],
            'salary_range'      => $request['salary_range']
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
