<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'article', 'description', 'price', 'user_id', 'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
