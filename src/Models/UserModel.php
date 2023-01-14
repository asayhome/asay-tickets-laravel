<?php

namespace AsayHome\AsayTickets\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserModel extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'users';


    public $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
