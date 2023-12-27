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
        return User::create(
            [

                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "password" => Hash::make($request->input("password")),
            ]
            );
    }


    public function login(Request $request){
            // $email = $request->input("name");
            // $password = $request->input("name");
            // if (Auth::attempt(
            //     ['email' => $email,
            //     'password' => $password
            // ])) {
            //     echo "goooood  ";
            // }else{
            //     echo "false";
            // }


            if (!Auth::attempt($request->only('email', 'password'))) {
                // return response()->json(['message' => 'error']);
                return view("invalid");
            }else{
                return view('home');

            }

            // $user = Auth::user();

            // $token = $user->createToken('token')->plainTextToken;

            // $cookie = cookie('jwt', $token, 60 * 24); // 1 day

            // return response([
            //     'message' => $token
            // ])->withCookie($cookie);

    }


    public function LoginM2(Request $request){
            // $request->validate(

            //     [
            //         "email" => "required",
            //         "password" => "required",
            //     ]
            //     );
            // $credential =$request->only('email', 'password');
            // $token  = Auth::attempt($credential);

            // if ($token) {
            //     return redirect("/");

            // }else{
            //     return redirect("/");

            // }


            $credetials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            // if (Auth::attempt($credetials)) {
            //     return redirect('/home')->with('success', 'Login Success');
            // }

            // return back()->with('error', 'Error Email or Password');


            if (Auth::attempt($credetials)) {
                return redirect()->route('profil');
            }else{
                return view("invalid");

            }
    }

    // public function user(){
    //     return User::all();
    // }
}
