<?php

namespace AsayHome\AsayTickets\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;

class AsayTicketsReplies extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'asay_tickets_replies';

    public $fillable = [
        'ticket_id',
        'created_by',
        'message'
    ];

    public function ticket()
    {
        return $this->hasOne(AsayTickets::class, 'id', 'ticket_id');
    }
    public function createdBy()
    {
        return $this->hasOne(UserModel::class, 'id', 'created_by');
    }

    public $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
