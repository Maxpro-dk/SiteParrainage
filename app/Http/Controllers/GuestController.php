<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class GuestController extends Controller

{
    public function __construct(){
        $this->middleware("auth")->except(["index",]);
    }

    public function index(){
        return view('index');

    }

    public function guest_profile(){
        if(!Gate::allows('yesguest')) return redirect()->route('dashboard');
        return view('guest_profile');
    }
}
