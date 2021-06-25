<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller{

    public $meta=[
        'title'=>'Dashboard',
    ];

    public function index(){

        return view ('dashboard')->with('meta', $this->meta);
    }
}
