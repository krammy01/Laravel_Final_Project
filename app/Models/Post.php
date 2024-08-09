<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id'];

    // Define any relationships or additional model logic here
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
