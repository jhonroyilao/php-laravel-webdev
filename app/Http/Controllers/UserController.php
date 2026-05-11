<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){
        return "REMOVE USER";
    }

    public function userInputParam($id, $name){
        $inputParamenter = $id;
        return $name ." Input Parameter is " . $inputParamenter;

    }

    public function userEdit($id, $name){
        return "<a href = '".route('userDisplay', [$id, $name])."' > Edit User </a> =";
    }

    public function userInfo($id){
        return "Your user id is " . $id;
    }

    public function addUser(Request $request){

        $request ->validate ([
            'first_name' =>['required','min:4'],
            'last_name' =>['required'],
            'email' =>['required', 'ends_with:@iskolarngbayan.pup.edu.ph'],
            'password' =>['required','min:5']
        ],[
            'first_name.required' => 'Wala ka bang pangalan? Leche maglagay ka muna ng pangalan!',
            'last_name.required' => 'Di mo ba mahal pamilya mo? Maglagay ka ng last name!',
            'email.required' => 'Lagay ka ng email uwu',
            'password.required' => 'Lagay ka ng password uwu',
        ]);


        Log::info ("======NEW USER=====");
        Log::info ($request->first_name);
        Log::info ($request->middle_name);
        Log::info ($request->last_name);
        Log::info ($request->email);
        Log::info ($request->password);

        $result=DB::table('users')->get();
        
        return $result;
    }
}
