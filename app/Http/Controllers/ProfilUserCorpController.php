<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilUserCorpController extends Controller
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

        return view('vacancy.myProfileCorp', compact('users'));

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
        // $province = rajaongkir_point('province', 'GET', ['id=' . $users->provinsi]);
        // $city = rajaongkir_point('city', 'GET', ['id=' .$users->kota. 'province='.$users->provinsi]);

        return view('vacancy.editProfileCorp', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $owner)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            ], [
                    'name.required' => 'Lengkapi Nama Anda',
                    'email.required' => 'Lengkapi Email Anda',
        ]);
        // dd($input);
        $owner->name = $request->name;
        $owner->email = $request->email;

        if ($image = $request->file('profile_photo_path')) {
            // $destinationPath = 'profile_photos/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path().'/profile_photos', $profileImage);
            $owner['profile_photo_path'] = "$profileImage";
        }else{
            unset($owner['profile_photo_path']);
        }
        $owner->update();

        // $user->update($input);

// dd($owner);
Alert::success('Berhasil', 'Data Berhasil di Ubah');
return redirect('/owner');
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


    public function editPasswordCorp($id){
        $users = User::find($id);

        return view('vacancy.editPasswordCorp', compact('users'));

    }

    public function updatePasswordCorp(Request $request){
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