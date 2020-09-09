<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Game extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPathAttribute()
    {
        return asset("api/game/$this->slug");
    }
}
