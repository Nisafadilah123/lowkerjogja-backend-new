<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan relasi antara model education dan user
        $educations = Education::with('user')->get();
        return view('user.education', compact('educations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // membuat data
        $users = User::all();
        return view('user.addEducation', compact('users'));
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
            'name' => 'required',
            'graduate' => 'required',
            'level' => 'required',
            'major' => 'required',
            'gpa' => 'required',
            'gpa_limit' => 'required'

        ]);

        // cara 1
        $education = new Education;
        $education->name = $request->name;
        $education->level = $request->level;
        $education->graduate =$request->graduate;
        $education->major =$request->major;
        $education->gpa=$request->gpa;
        $education->gpa_limit=$request->gpa_limit;

        $education->user_id = Auth::user()->id;
        $education->save();

        // cara 2
        // $education = new Education([
        //     'name' => $request->name,
        //     'graduate' => $request->graduate,
        //     'level'=> $request->level,
        //     'major' => $request->major,
        //     'gpa' => $request->gpa

        // ]);

        // $education->user_id = $request->user_id;
        // $education->save();

        // $data = $request->all();
        // $data['user_id'] = Auth::id();
        // Education::create($data);
        // return $request;
        return redirect('/education')->with('status', 'sukses');

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
    public function edit(Education $education)
    {
        $educations = Education::all();

        return view('user.editEducation', compact('educations'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
//    dd($education);
        $request->validate([
            'name' => 'required',
            'level' => 'required',
            'graduate' => 'required',
            'major' => 'required',
            'gpa' => 'required',
            'gpa_limit' => 'required'

        ]);
        // return $request;
        // cara 1
        // Education::where('id', $education->id)
        // ->update([
        //     'name' => $request->name,
        //     'level'=> $request->level,
        //     'graduate' => $request->graduate,
        //     'major' => $request->major,
        //     'gpa' => $request->gpa,
        //     // "user_id" => Auth::user()->id,

        //     ]);


        // $education = new Education;
        // cara 2
        $education->name = $request->name;
        $education->level = $request->level;
        $education->graduate =$request->graduate;
        $education->major =$request->major;
        $education->gpa=$request->gpa;
        $education->gpa_limit=$request->gpa_limit;


        $education->save();


            return redirect('/education')->with('status', 'sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
        // return "delete";
        Education::destroy($education->id);
        return redirect('/education')->with('status', 'sukses');
    }
}