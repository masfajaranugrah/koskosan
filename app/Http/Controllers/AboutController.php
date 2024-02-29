<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminGudang\FooterSet;

class AboutController extends Controller
{
    public function index()
    {
        $footer = FooterSet::all();
        return view('Home.About', compact('footer'));
    }
}
