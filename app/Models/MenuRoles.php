<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuRoles extends Model
{
    use HasFactory;
    protected $fillable = [
        'menus_id',
        'roles_id',
    ];
}
