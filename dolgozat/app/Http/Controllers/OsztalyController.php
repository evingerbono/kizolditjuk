<?php

namespace App\Http\Controllers;

use App\Models\Osztaly;
use Illuminate\Http\Request;

class OsztalyController extends Controller
{
    //

   public function index (){

        return Osztaly::all();
   }
}
