<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan relasi antara model skill dan user
        $skills = Skill::where('user_id', Auth::user()->id)->get();
        return view('user.skill', compact('skills'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // membuat data baru
        $users = User::all();
        return view('user.addskill', compact('users'));
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
        $request->validate([
            'level' => 'required',
            'ahli' => 'required'
        ], [
            'level.required' => 'Lengkapi Tingkatan Keterampilan Anda',
            'ahli.required' => 'Lengkapi Keterampilan Anda'
        ]);
        // return $request;

        $skill = new Skill;
        $skill->level = $request->level;
        $skill->ahli = $request->ahli;
        $skill->user_id = Auth::user()->id;
        $skill->save();
        alert()->success('Berhasil', 'Data berhasil ditambahkan');

        return redirect('/skill');

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
    public function edit(Skill $skill)
    {
        //
        $skills = Skill::where('user_id', Auth::user()->id)->get();

        return view('user.editskill', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //
        $request->validate([
            'level' => 'required',
            'ahli' => 'required'
        ], [
            'level.required' => 'Lengkapi Tingkatan Keterampilan Anda',
            'ahli.required' => 'Lengkapi Keterampilan Anda'
        ]);

        // return $request;
        $skill->level = $request->level;
        $skill->ahli = $request->ahli;
        $skill->user_id = Auth::user()->id;
        $skill->save();
        alert()->success('Berhasil', 'Data berhasil di update');

        return redirect('/skill');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
        Skill::destroy($skill->id);
        return redirect('/skill')->with('status', 'sukses');
    }
}