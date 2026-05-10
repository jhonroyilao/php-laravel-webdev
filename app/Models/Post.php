<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = [
        'title',
        'description',
        'created_by',
        'status',
    ];

    public function statusInfo()
    {
        return $this->belongsTo(Status::class, 'status');
    }
}