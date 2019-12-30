<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Quotation;

use App\Models\UsersModel;
use App\Users;

class UsersController extends Controller
{
    //
    public function user(){
        return response()->json(UsersModel::get(), 200);
        // return response()->json(["test"], 200);
    }

    public function userById($id)
    {
        return response()->json(UsersModel::find($id), 200);
    }

    public function userSave(Request $request){
        $users = UsersModel::create($request->all());
        return response()->json($users, 201);
    }

    public function userUpdate(Requst $request, UsersModel $user){
        $user->update($request->all());
        return response()->json($user, 200);
    }
}
