<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CalculatorController extends Controller
{
    public function index() {
        return view('index');
    }

    public function operation(Request $request) {
        $first = $request->first;
        $second = $request->second;
        switch($request->operation) {
            case 'addition' :
                $result = $first + $second;
            break;
            case 'subtraction':
                $result = $first - $second;
            break;
            case 'multiplication' :
                $result = $first * $second;
            break;
            case 'division' :
                if($second == 0) {
                    $result = 'Cannot perform calculation';
                } else {
                    $result = $first / $second ;
                }
            break;
        }


        return view('index' , compact('result'));
    }
}
