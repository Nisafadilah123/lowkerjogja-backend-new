<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Corp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CorpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $corps = Corp::where('user_id', Auth::user()->id)->get();
       return view('vacancy.profilCorp', compact('corps'));
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
        $corps = User::find($id);
        $corps = Corp::where('user_id', Auth::user()->id)->get();

        return view('vacancy.editCorp', compact('corps'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corp $perusahaan)
    {
        //
        // dd($corps);
        $request->validate([
            'nama_corp' => 'required',
            'description' => 'required',
            'industri' => 'required',
            'location' => 'required',
            'work_day' => 'required',
            'founded_year' => 'required',
            ], [
                    'nama_corp.required' => 'Lengkapi Nama Perusahaan Anda',
                    'description.required' => 'Lengkapi Deskripsi Perusahaan Anda',
                    'industri.required' => 'Lengkapi Industri Perusahaan Anda',
                    'location.required' => 'Lengkapi Lokasi Perusahaan Anda',
                    'work_day.required' => 'Lengkapi Hari Kerja Anda',
                    'founded_year.required' => 'Lengkapi Tahun Berdiri Perusahaan Anda',

        ]);
        // dd($perusahaan);

                $perusahaan->nama_corp = $request->nama_corp;
                $perusahaan->description = $request->description;
                $perusahaan->industri = $request->industri;
                $perusahaan->location = $request->location;
                $perusahaan->work_day = $request->work_day;
                $perusahaan->founded_year = $request->founded_year;

                if ($image = $request->file('logo')) {
                    // $destinationPath = 'profile_photos/';
                    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    // dd($profileImage);

                    $image->move(public_path().'/logo', $profileImage);
                    $perusahaan['logo'] = $profileImage;
                    // ddd($perusahaan['logo']);

                }else{
                    unset($perusahaan['logo']);
                }

                $perusahaan->update();

        // dd($perusahaan);

                Alert::success('Berhasil', 'Datamu telah terubah');
                return redirect('/perusahaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}