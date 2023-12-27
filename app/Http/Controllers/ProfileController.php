<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profilePage(){

        $user = Auth::User();
        return view('Profil', compact('user'));
    }
}
