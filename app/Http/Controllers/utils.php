<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Utils extends Controller
{

    public function index($num1, $num2){
    
    Log::debug("Starting index with num1: {$num1}, num2: {$num2}");  // DEBUG level
    Log::info("Beginning full calculation process"); // INFO LEVEl


    $add = $this->add($num1, $num2);
    $subtract = $this->subtract($num1, $num2);
    $product = $this->product($num1, $num2);
    $divide = $this->divide($num1, $num2);


    Log::notice("All calculations completed successfully"); // NOTICE LEVEL

    return "<h1>
        Addition: {$add} <br>
        Subtraction: {$subtract} <br>
        Product: {$product} <br>
        Division: {$divide}
    </h1>";
    }
    

     public function add($param1, $param2){ // addition
        Log::debug("Entering add function with {$param1}, {$param2}");
        Log::info("Adding {$param1} and {$param2}");
        $result = $param1 + $param2;
        Log::notice("Addition result: {$result}");
        return $result;
    }

    public function subtract($param1, $param2){ //subcration
        Log::debug("Entering subtract function with {$param1}, {$param2}");
        Log::info("Subtracting {$param2} from {$param1}");
        $result = $param1 - $param2;
        Log::notice("Subtraction result: {$result}");
        return $result;
    }
    public function product($param1,$param2){ // multiplication
        Log::debug("Entering product function with {$param1}, {$param2}");
        $result = $param1 * $param2;
        Log::info("Product computed");
        Log::notice("Product result: {$result}");
        return $result;
    }

    public function divide($param1,$param2){ // divide
        Log::debug("Entering divide function with {$param1}, {$param2}");

        if($param2==0){
        Log::warning("Attempted division by zero: {$param1} / {$param2}");
        return "Cannot divide by zero"; // to prevent crash
        }

        $result = $param1 / $param2;
        Log::info("Division computed");
        Log::notice("Division result: {$result}");
        return $result;
    }
}