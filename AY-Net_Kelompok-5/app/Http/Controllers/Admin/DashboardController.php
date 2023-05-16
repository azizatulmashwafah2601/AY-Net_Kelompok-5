<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use routes\web;
use DB;

class DashboardController extends Controller
{
    public function index(Request $request){
        $admin = DB::table('users')->count();
        $pelanggan = DB::table('pelanggan')->count();
        $paket = DB::table('paket')->count();
        return view('pages.admin.dashboard', compact('admin', 'pelanggan', 'paket'));
    }
}
