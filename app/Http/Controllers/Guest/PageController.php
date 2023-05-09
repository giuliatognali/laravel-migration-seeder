<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
   public function index(){ 
         
        //$trains = Train::all(); 
        $trains= Train::where('departure_time', '>=',now('Europe/Rome'))
            ->where('cancel', 0)
            ->orderBy('departure_time')
        ->get();

        return view('home', compact('trains'));
   }
}
