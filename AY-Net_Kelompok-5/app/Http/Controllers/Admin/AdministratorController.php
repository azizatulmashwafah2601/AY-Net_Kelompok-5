<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrator;
use routes\web;

class AdministratorController extends Controller
{
    public function index(){
        $administrator = Administrator::all();
        return view('pages.admin.administrator.administrator', compact('administrator'));
    }

    public function destroy($id) {
        $administrator = Administrator::findorfail($id);
        $administrator->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}
