<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Quotation;

use App\Models\UsersModel; 

class UsersController extends Controller
{
    //
    public function user(){
        return response()->json(UsersModel::get(), 200);
        // return response()->json(["test"], 200);
    }
}
