<?php

namespace App\Http\Controllers\AdminGudang\Setting_homepage;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\AdminGudang\FooterSet;

class FooterController extends Controller
{

    public function index()
    {
        $footer = FooterSet::all();
        return view('Admin.Components.Setting_homepage.Footer', compact('footer'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'copyright' => 'required',
        ]);

        FooterSet::create([
                'copyright' => $request->copyright,
            ]);


        return redirect('admin-gudang/footer-home')->with('success', 'create new barang success ');
    }
}
