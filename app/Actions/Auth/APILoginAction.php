<?php 

namespace App\Actions\Auth;


use Illuminate\Support\Facades\Hash;

class APILoginAction{
    private $name ;
    private $username ;
    private $password ; 
    private $user_model;
    
    public function __construct(string $name,string $username,string $password, string $user_model){
       
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->user_model = $user_model;

    }

    public function run($token){
        
        $user = $this->user_model::where($this->name,$this->username)->get()->first();

        $login_response = [
            'token' => null,
            'code' => 401,
            'success' => false,
            'message' => null
        ];

        if(!isset($user))
        {
            return response()->json(['message' => 'Account not found']);

        }

        if(!Hash::check($this->password,$user->getAuthPassword()))
        {
            return response()->json(['message' => 'Password not match']);
        }

        $login_response['token'] = $user->createToken($token)->plainTextToken;
        $login_response['code'] = 200;
        $login_response['success'] = true;
        $login_response['users'] = $user;
        $login_response['message'] = "Authenticated";

        return $login_response;
        

    }
}