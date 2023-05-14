<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;





class LoginController extends Controller
{

    protected $request;

    function __construct(Request $request){
        $this->request = $request;
    }
 public function logout(){
    Auth::logout();
    return redirect()->route('login');
 }
 public function create_project(){
     return view('Home.project');
 }

 public function existEmail(){


    $email =$this->request->get('email');


    $user = User::where('email', $email)->first();

    //$user = User::whereRaw('email = ?', [$email])->first();
    //echo $user;

    $response = "";
    if ($user){
        $response= "exist";
    } else{
        $response ="not_exist";
    }


    return response()->json([
        'code'=> 200,
        'response'=> $response

    ]);


 }



}
