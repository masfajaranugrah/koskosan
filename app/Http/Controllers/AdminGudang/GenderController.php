<?php

namespace App\Http\Controllers\AdminGudang;
use Illuminate\Http\Request;
use App\Models\AdminGudang\gender;
use App\Http\Controllers\Controller;

class GenderController extends Controller
{
    public function index()
    {
        $genders = gender::all();
        return view("Admin.Components.Master_data.gender", compact('genders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gender' => 'required',
        ]);

        gender::create([
            'gender' => $request->gender,
        ]);


        return redirect('admin-gudang/gender')->with('success', 'gender berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $genders =  gender::find($id)->update($request->all());

        return redirect('/admin-gudang/gender')->with('success', 'gender berhasil diupdate');
    }

      public function destroy($id)
    {
        gender::find($id)->delete();
        return redirect('/admin-gudang/gender')->with('success', 'gender berhasil didelete');
    }
}
