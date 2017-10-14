<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partition extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
