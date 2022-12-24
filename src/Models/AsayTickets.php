<?php

namespace AsayHome\AsayTickets\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AsayTickets extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'section_id',
        'model',
        'model_id',
        'created_by',
        'subject',
        'body',
        'status',
        'closed_at'
    ];


    public function section()
    {
        return $this->hasOne(AsayTicketsSections::class, 'id', 'section_id')->withTrashed();
    }

    public function createdby()
    {
        return $this->hasOne(UserModel::class, 'id', 'created_by')->withTrashed();
    }

    public function replies()
    {
        return $this->hasMany(AsayTicketsReplies::class, 'ticket_id', 'id')->with('sender');
    }

    public $hidden = [
        // 'created_at',
        'updated_at',
        'deleted_at',
    ];
}
