<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use routes\web;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index(){
        return view('pages.admin.profil.profil');
    }
    public function profilupdate(Request $request){
        $user_id = Auth::user()->id;
        $user = User::findorfail($user_id);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        
        if ($request->hasfile('foto_profil')) {
            $destination = 'img/administrator/'.$user->foto_profil;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('foto_profil');
            $extension = $file->getClientOriginalExtension();
            $fillname = time() . '.' . $extension;
            $file->move('img/administrator', $fillname);
            $user->foto_profil = $fillname;
        }

        $user->update();
        return redirect()->back()->with('toast_success', 'Profil Berhasil Diubah');
    }
}
