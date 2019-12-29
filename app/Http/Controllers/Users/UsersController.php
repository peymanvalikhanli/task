<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UsersModel; 

class UsersController extends Controller
{
    //
    public function user(){
        return return response()->json(UsersModelRoute::get(), 200);
    }
}
