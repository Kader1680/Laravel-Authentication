<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{

    public function RegisterPage(){
        return view("register");
    }

    public function LoginPage(){
        return view("login");
    }
    public function register(Request $request)
    {
        // return User::create(
        //     [

        //         "name" => $request->input("name"),
        //         "email" => $request->input("email"),
        //         "password" => Hash::make($request->input("password")),
        //     ]
        //     );

            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();
            $credetials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($credetials)) {
                return redirect()->route('profil');
            }else{
                return view("invalid");

            }

    }


    public function LoginM2(Request $request){

            $credetials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($credetials)) {
                return redirect()->route('profil');
            }else{
                return view("invalid");

            }
    }

}
