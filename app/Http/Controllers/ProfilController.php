<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Route;

class ProfilController extends Controller
{
    //
        // halaman profile
        public function profile()
        {
            $users = User::all();
            return view('user.myProfile');
        }

        public function store(Request $request)
    {
        // Logo | Foto
        $nm1 = $request->profile_photo_path;
        $namafile1 = time() . rand(100, 999) . "." . $nm1->getClientOriginalExtension();

        $dtUpload = new User();
        $dtUpload->user_id = Auth::user()->id;
        $dtUpload->name    = $request->name;
        $dtUpload->email  = $request->email;
        $dtUpload->address     = $request->profile_photo_path;

        $nm1->move(public_path() . '/template/img/user', $namafile1);
        $dtUpload->save();
        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect('/user');
    }

    public function editProfile(User $user)
    {
        $users = User::all();
        return view('user.editProfile', compact('user'));
    }

    public function updateuser(Request $request, $id)
    {
        $ubah = User::findorfail($id);
        $awal1 = $ubah->profile_photo_path;

        if ($request['profile_photo_path'] != null) {

            $request->profile_photo_path->move(public_path() . '/template/img/user', $awal1);
        }

        $user = [
            'name'     =>  $request['name'],
            'email'   =>  $request['email'],
            'address'      =>  $request['address'],
            'profile_photo_path'          =>  $awal1,
        ];
        $ubah->update($user);

        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect('/user');
    }

    public function deletecompany($id)
    {
        $user = User::find($id);
        $user->delete();
        alert()->success('Berhasil', 'Data Berhasil dihapus');
        return redirect('/user');

    }


}