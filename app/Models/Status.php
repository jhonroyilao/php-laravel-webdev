<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Status extends Model
{
    protected $table = 'statuses';

    protected $fillable = [
        'name',
        'display_name',
        'order_by'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'status');
    }
}