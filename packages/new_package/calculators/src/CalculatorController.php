<?php

namespace new_package\calculators;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class CalculatorController extends Controller
{
      public function add($a, $b)
      {
           $result = ($a+$b);
           return view('calculator::add', compact('result'));
      }

      public function subtract($a, $b)
      {
          $result = ($a-$b);
           return view('calculator::add', compact('result'));
      }
}