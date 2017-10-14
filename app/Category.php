<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function partition()
    {
        return $this->belongsTo(Partition::class);
    }
}
