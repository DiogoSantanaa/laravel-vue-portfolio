<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function technologies()
    {
        return $this->belongsTo(Technologies::class, 'technologie_id');
    }

    public function technologiesJs()
    {
        return $this->belongsTo(TechnologiesJs::class, 'technologie_js_id');
    }

    public function technologiesCss()
    {
        return $this->belongsTo(TechnologiesCss::class, 'technologie_css_id');
    }
  
}