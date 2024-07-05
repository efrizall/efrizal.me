<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadDok extends Controller
{
    public function index(){
        return view('upload');
    }

    public function uploadDok(Request $request){
        $data = $request->all();
        // dd($data['dok']);
        $data['dok']->storeAs('', 'testingfile.pdf', 'public');
        return redirect(route('upload'))->with('success', 'Berhasil');
    }
}
