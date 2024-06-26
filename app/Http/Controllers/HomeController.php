<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pentol;
use App\Models\Minuman;
use App\Models\Snack;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home (){
    return view('frontend.index');
    }

       public function index() 
       {
        $pentol = Pentol::all();
        $minuman = Minuman::all();
        $snack = Snack::all();

        
        return view('frontend.home',
        [
            'pentolan'  => $pentol,
            'minuman'   => $minuman,
            'snack'     => $snack,       
        ]);
    }
}
