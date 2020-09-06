<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Scores extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
