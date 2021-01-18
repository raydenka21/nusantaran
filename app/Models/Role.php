<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    protected $fillable = ['role_name'];
    use SoftDeletes;
    protected $table = 'role';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
