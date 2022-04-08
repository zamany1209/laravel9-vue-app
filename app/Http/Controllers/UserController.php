<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;
use App\Models\User;
class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        if(Auth::check())
        {
            $user = '{"state":true,"data":'.Auth::user().'}';
            return $user;
        }
        else
        {
           return '{"state":false}'; 
        }
    }
}
