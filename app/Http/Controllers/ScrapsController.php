<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Scraps;

class ScrapsController extends Controller
{
    public function index(){
        $scraps = Scrap::orderBy('created_at', 'asc')->get();
        return view('scraps.index');
    }
}
