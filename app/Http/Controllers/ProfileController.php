<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function  index(){

        return view('account.profile');
    }

    public function  edit(){

        return view('account.edit');
    }

    public function  update(Request $request){

       dd( $request->all());

        return view('account.edit');
    }
}
