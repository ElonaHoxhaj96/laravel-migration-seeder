<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    // il petodo index è il metodo che si usa per la home
    public function index(){
        return view('home');
   }
  
   public function about(){
       return view('about');
   }

   public function contacts(){
       return view('contacts');
   }
   public function trains(){
   
        // Recupera tutti i treni dal database
        $trains = Train::all();

        // Passa la variabile $trains alla vista
        return view('trains', compact('trains'));
    }
}
