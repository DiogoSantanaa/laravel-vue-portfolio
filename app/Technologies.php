<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technologies extends Model
{
    protected $guarded = [];

    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
