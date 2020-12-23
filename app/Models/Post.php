<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'autor_id',
        'image_id',
        'content',
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function autor_id()
    {
        return $this->belongsTo(User::class, 'autor_id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
