<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function nam_sandal(){
        return view('pages.giaydep.giaydepNamSandal');
    }

    public function nam_sneaker(){
        return view('pages.giaydep.giaydepNamSneaker');
    }
}
