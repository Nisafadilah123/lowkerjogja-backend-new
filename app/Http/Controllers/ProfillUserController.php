<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::success('Berhasil', 'Datamu telah terubah');
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

        alert()->success('Berhasil', 'Password berhasil diubah');

        return view('vacancy.passwordCorp');

    }

}