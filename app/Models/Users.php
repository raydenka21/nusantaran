<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    protected $fillable = ['fullname','name','address','role_id','email','username','password'];
    use SoftDeletes;
    protected $table = 'users';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
