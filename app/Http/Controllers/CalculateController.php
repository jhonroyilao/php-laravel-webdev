<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CalculateController extends Controller
{
    
    public function index ($param1,$param2){
        Log::info ('========= START INDEX FUNCTION ====');
        $utils = new Utils();

        // dd('STOP'); // to see kung saan nagkakaroon ng error <- starting point 
        $add = $utils->add($param1, $param2);
        $subtract = $utils->subtract($param1, $param2);
        $product = $utils->product($param1, $param2);
        $divide = $utils->divide($param1, $param2);

        Log::info ('Product =' .$product);
        Log::info ('Add =' .$add);
        Log::info ('Subtract =' .$subtract);
        Log::info ('Divide =' .$divide);


        Log::info ('========= END INDEX FUNCTION ====');

        return view('act4');
        // return view('calculate', compact('product', 'divide', 'add', 'subtract')); // pantawag ng variables 
                  // complex version of compact : return view ('calculate', []'product' ==> $product];
    }

}
