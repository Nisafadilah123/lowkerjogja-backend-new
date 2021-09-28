<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfillUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = Auth::user();
        $province = rajaongkir_point('province', 'GET', ['id=' . $users->provinsi]);
        $city = rajaongkir_point('city', 'GET', ['id=' .$users->kota. 'province='.$users->provinsi]);
        // dd($city);

        // return response()->json($hasil);
        // dd($province);

            return view('user.myProfile', compact('users', 'province', 'city'));
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
        $users = User::find($id);
        $users = Auth::user();
        $province = rajaongkir_point('province', 'GET', ['id=' . $users->provinsi]);
        $city = rajaongkir_point('city', 'GET', ['id=' .$users->kota. 'province='.$users->provinsi]);

        return view('user.editProfile', compact('users', 'province', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'address' => 'required',
                    'provinsi' => 'required',
                    'kota' => 'required',
                    ], [
                            'name.required' => 'Lengkapi Nama Anda',
                            'email.required' => 'Lengkapi Email Anda',
                            'address.required' => 'Lengkapi Alamat Anda',
                            'provinsi.required' => 'Lengkapi Provinsi Anda',
                            'kota.required' => 'Lengkapi Kota Anda',

                ]);
                // $input = array(
                //     'name' => $request->name,
                //     'email' => $request->email,
                //     'address' => $request->address,
                //     'provinsi' =>$request->province_id,
                //     'kota' => $request->city,

                // );
                // $input = $request->all();
                // dd($input);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->address = $request->address;
                $user->provinsi = $request->provinsi;
                $user->kota = $request->kota;


                if ($image = $request->file('profile_photo_path')) {
                    // $destinationPath = 'profile_photos/';
                    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move(public_path().'/profile_photos', $profileImage);
                    $user['profile_photo_path'] = "$profileImage";
                }else{
                    unset($user['profile_photo_path']);
                }
                $user->save();

                // $user->update($input);

// dd($user);
        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect('/user');
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

    public function province(){
        $hasil = rajaongkir_point("province");
        return response()->json($hasil);
    }

    public function city(Request $request){
        $hasil = rajaongkir_point("city",["province=$request->prov_id"]);
        return response()->json($hasil);
    }

    public function editPassword($id){
        $users = User::find($id);

        return view('user.editPassword', compact('users'));

    }

    public function updatePassword(Request $request){
        $request->validate([
            // 'old_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        $user= User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        // dd($user);
        // $request->validate([
        //     'old_password' => 'required',
        //     'new_password' => 'required|min:8',
        //     'password_confirmation' => 'required|same:new_password'
        //     ], [
        //             'old_password' => 'Lengkapi Kata Sandi Anda, Kata Sandi Min. 8 Karakter',
        //             'new_password' => 'Lengkapi Kata Sandi Anda, Kata Sandi Min. 8 Karakter',
        //             'password_confirmation' => 'Ulangi Kata Sandi Anda'

        // ]);

        // $current_user=auth()->user();

        // dd($current_user);
        // if (Hash::check($request->old_password, $current_user->password)) {
        //     $user->save();
        //     return redirect('/password')->with('success', 'Old password sesuai');
        // }else{
        //     return redirect()->back()->with('error', 'Old Password tak sesuai');
        // }

        // $user->password = Hash::make($request->password);

        // return view('user.editPassword', compact('users'));
        // $user = $request->all();

        // if(!Hash::check($user['password'], auth()->user()->password)){
        //     alert()->danger('error','You have entered wrong password');
        //      return back();

        // }else{

        return view('user.password');

        // }

    }

}
