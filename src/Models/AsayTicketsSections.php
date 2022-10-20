<?php

namespace AsayHome\AsayTickets\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsayTicketsSections extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'name',
        'active'
    ];

    public $casts = [
        'active' => 'boolean'
    ];

    public $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
