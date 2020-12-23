<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'post_id',
        'commentator_id',
        'content',
    ];

    public function post(){
        return $this->belongsTo(Post::class,'post_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id', 'commentator_id');
    }
}
