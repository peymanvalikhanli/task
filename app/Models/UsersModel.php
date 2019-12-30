<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    //
    protected $table = "users";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'UserName',
        'Password',
        'Avatar',
        'Token',
        'UserID',
        'OfficePosition',
        'ServerRef',
        'LastLogin',
        'IsOnline',
        'ModifyDate',
        'CreationDate',
        'created_at',
        'updated_at'
    ];
}
