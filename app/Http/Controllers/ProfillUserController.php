<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $users = User::all();
            return view('user.myProfile', compact('users'));
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
        return view('user.editProfile', compact('users'));
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
                $input = $request->all();

                if ($image = $request->file('profile_photo_path')) {
                    $destinationPath = 'profile_photos/';
                    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $profileImage);
                    $input['profile_photo_path'] = "$profileImage";
                }else{
                    unset($input['profile_photo_path']);
                }

                $user->update($input);


        //
        // $old_image_name = $request->hidden_image;
        // $image = $request->file('profile_photo_path');

        // if ($image != '') {
        //     # code...
        //     $request->validate([
        //         'name' => 'required',
        //         'email' => 'required',
        //         'address' => 'required',
        //         'provinsi' => 'required',
        //         'kota' => 'required',
        //         'profile_photo_path'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        //     ],
        // );
        //     $image_name = $old_image_name;
        //     $image->move(public_path('profile_photo_path'), $image_name);
        // }else{
        //     $request->validate([
        //         'name' => 'required',
        //         'email' => 'required',
        //         'address' => 'required',
        //         'provinsi' => 'required',
        //         'kota' => 'required',
        //         ], [
        //                 'name.required' => 'Lengkapi Nama Anda',
        //                 'email.required' => 'Lengkapi Email Anda',
        //                 'address.required' => 'Lengkapi Alamat Anda',
        //                 'provinsi.required' => 'Lengkapi Provinsi Anda',
        //                 'kota.required' => 'Lengkapi Kota Anda',

        //     ]);
        //     $image_name = $old_image_name;
        // }



        // // return $request;
        // $user->user_id = Auth::user()->id;
        // $user->name = $request->name;
        // $user->address = $request->address;
        // $user->provinsi = $request->provinsi;
        // $user->kota = $request->email;
        // $user->email = $request->email;
        // $user->profile_photo_path = $image_name;

        // dd($user);
        // // $user->save();
        // alert()->success('Berhasil', 'Data berhasil di update');

        // return redirect('/user');

        // $ubah = User::findorfail($id);
        // $awal1 = $ubah->profile_photo_path;

        // if ($request['profile_photo_path'] != null) {

        //     $request->profile_photo_path->move(public_path() . '/template/img/user', $awal1);
        // }

        // $user = [
        //     'name'     =>  $request['name'],
        //     'email'   =>  $request['email'],
        //     'address'      =>  $request['address'],
        //     'profile_photo_path'          =>  $awal1,
        // ];
        // $ubah->update($user);

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
}
