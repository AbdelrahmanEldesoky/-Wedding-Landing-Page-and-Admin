<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    protected $table = 'homes';
    protected $guarded = [];

    protected $appends = ['image_path','image_pathlogo'];
    public function getImagePathAttribute()
    {
        return asset('website/images/' . $this->image1);
    }

    public function getImagePathlogoAttribute()
    {
        return asset('website/images/' . $this->image2);
    }



}
