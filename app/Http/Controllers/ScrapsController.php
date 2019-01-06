<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Scrap;

// use Illuminate\Validation\Validator;

class ScrapsController extends Controller
{
    public function index(){
        $scraps = Scrap::orderBy('created_at', 'asc')->get();
        return view('scraps.index', ['scraps' => $scraps]);
    }
    public function new(){
        return view('scraps.new');
    }
    public function create(Request $request){
        // $validator = Validator::make($request->all(), [
        //     'content' => 'required',
        //     'status' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return redirect('/')
        //         ->withInput()
        //         ->withErrors($validator);
        // }
        $scrap = new Scrap;
        $scrap->content = $request->content;
        $scrap->status = $request->status;
        $scrap->user_id = 1;
        $scrap->save();
        return redirect('/');
    }
}