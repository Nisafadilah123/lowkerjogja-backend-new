<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Corp;
use App\Models\Jobs;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Post;
use \App\lowker;



class UserController extends Controller
{
    public function province(){
        $hasil = rajaongkir_point("province");
        return response()->json($hasil);
    }

    public function city(Request $request){
        $hasil = rajaongkir_point("city",["province=$request->prov_id"]);
        return response()->json($hasil);
    }
        // halaman home
        public function home()
        {
            $corps = Corp::all();
            $jobs = Jobs::all();
            return view('main.home',compact('corps', 'jobs'));
            // return view('main.home');
        }

        // halaman findjobs
        public function findjobs()
        {
            return view('user.findjobs');
        }

        // halaman about
        public function about()
        {
            return view('user.about');
        }

        // halaman profile
        public function profile()
        {
            return view('user.myProfile');
        }

        // halaman jobs
        public function jobs()
        {
            return view('user.jobs');
        }

        // halaman logout
        public function logout()
        {
            return redirect()->route('login');
        }

        // Menu Profile
        // halaman myProfile
        // public function myprofile()
        // {
        //     return view('user.myProfile');
        // }

        // halaman editProfile
        // public function editProfile(Request $request)
        // {
        //     return view('user.editProfile', [
        //         'user' => $request->user()
        //     ]);
        // }

        // halaman education
        // public function education()
        // {
        //     return view('user.education');
        // }

        // halaman editEducation
        // public function editEdu()
        // {
        //     return view('user.editEducation');
        // }

        // halaman skill
        public function skill()
        {
            return view('user.skill');
        }

        // halaman editSkill
        public function editSkill()
        {
            return view('user.editSkill');
        }

        // halaman password
        public function password()
        {
            return view('user.password');
        }

        // halaman editPassword
        public function editPassword()
        {
            return view('user.editPassword');
        }

        // halaman editProfile
        public function editPro(Request $request)
        {
            return view('user.editPro', [
                'user' => $request->user()
            ]);
        }

    //     public function registrasi()
    // {
    //     return view('auth.register-ajax');
    // }

    // public function registrasi_post(Request $request){
    //     $request->validate([
    //         "name"=>"required"
    //     ]);
    // }

    public function registrasi_view(){
        return view('auth.register_ajax');
    }

    public function registrasi(Request $request){
        $validation = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'address' => 'required|min:5',
            'email' => 'required|min:10',
            'password' => 'required|min:5',
        ],[
            "name.required"=>"Membutuhkan nama lengkap",
            "address.required"=>"Membutuhkan alamat lengkap",
            "email.required"=>"Membutuhkan alamat email",
            "password.required"=>"Membutuhkan kata sandi",
        ]);


        if($validation->fails()){
            return response()->json([
                "status" => false,
                "result" => $validation->errors()
            ]);
        }else{
            // logic
            $user = new User;

            $user->name = $request->name;
            $user->address = $request->address;
            $user->email = $request->email;
            $user->password = $request->password;

            $user->save();
            return response()->json([
                "status" => $user->save(),
                "result" => $user
            ]);
        }
    }

    public function lihatjobs(Request $request){
        
        // $id = DB::table('jobs')
        // ->where('id_jobs', $id_jobs)->first();

        $lihatjobs = DB::table('jobs')
        ->select('id', 'job_type', 'created_at', 'position', 'city', 'provinces', 'salary_range' )
        ->get();

        // $logo = DB::table('companies')->select('logo')
        // ->get();

        // $namacorp = DB::table('job_id')->select('corp_id')
        // ->get();


        return view('user.findjobs', 
        ['lihatjobs'=> $lihatjobs]);
    }

    public function lamar_view($id){
        $idjob = DB::table('jobs')->where('id', $id)
        ->get();

        return view('user.lamar', ['jobs' => $idjob]);
    }

    public function insertcv(Request $request){
        
        $myString = auth()->user()->email;
        $namauser = auth()->user()->name;
        $uid = auth()->user()->id;
        
        $userid = DB::table('users')->select('id')
            ->where('id', $uid)
            ->orWhere('email', $myString)
            ->orWhere('name', $namauser)
            ->get();

        $data = new lowker;
        if ($request->file('cv')) {
            $file = $request->file('cv');
            $namauser = $namauser;
            $ext = $file->getClientOriginalExtension();
            $nama_file = $namauser . "." . $file->getClientOriginalExtension();
            $path = 'CV';
            $file->getMimeType();
            $file->move($path, $nama_file);
            $data->file = $nama_file;
        }

        DB::table('apply_jobs')->insert(
            [
                'user_id' => $uid,
                'job_id' => $request->idjob,
                'cv' => $data->file,
                'status' => $request->letter
            ]
        );

        return redirect('/findjobsUser')->with('success', 'CV anda berhasil dikirim');
    }

    public function detail_view($id) 
    {
        $jobs = DB::table('jobs')->where('id', $id)->get();
        return view('user.detail', ['jobs' => $jobs]);
    }   


}



 // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()->all()]);
        // } else {
        //     $user = new \App\User;
        //     $user->name = $req->nama;
        //     $user->address = $req->address;
        //     $user->email = $req->email;
        //     $user->password = $req->password;
        //     $simpan = $user->save();


        //     $req->request->add(['user_id' => $user->id]);
        //     if ($simpan == 1) {

        //         $status = "Tersimpan";

        //     } else {
        //         $status = "Gagal";
        //     }
        //     echo json_encode(array("status" => $status));
        // }


        // $input = $request->all();
            // $user = User::create($input);
            // return response()->json($user, 200);