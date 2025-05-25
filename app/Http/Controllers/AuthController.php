<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller

{
   

    public function login(LoginRequest $request){
        
        $user = User::where('email', $request->email)->first();
     
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        return $this->response([null,
            "Token" => $user->createToken($request->email)->plainTextToken
        ]);
    }

    public function register() {

    }
    
    public function logout() {

    }

    public function user(Request $request) {
        // return new UserResource($request->user());
        return $this->response(null, new UserResource($request->user()));
        
        
    }
}
