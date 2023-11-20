<?php

namespace App\Http\Controllers;


class SumaController extends Controller
{
   public function add($num1, $num2){
     return $num1 + $num2;
   }
}
