<?php

namespace App\Http\Controllers\err;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Err403Controller extends Controller
{
    public function index()
    {
        $redirectRoute = $this->getRedirectRoute();

        return view('err.403.403', ['redirectRoute' => $redirectRoute]);
    }

    private function getRedirectRoute()
    {
        $user = Auth::user();

        // Memeriksa peran pengguna dan menentukan rute yang sesuai
        if ($user->hasRole('admin')) {
            return route('dashboard-gudang');
        } elseif ($user->hasRole('karyawan')) {
            return 'karyawan-gudang';
        } elseif ($user->hasRole('manager')) {
            return 'manager-gudang';
        }

        // Default fallback jika peran tidak ditemukan
        return view('err.403.403');// Ganti 'home' dengan rute default yang sesuai
    }
}
