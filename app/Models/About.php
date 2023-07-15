<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    protected $table = 'abouts';
    protected $guarded = [];

    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('website/images/' . $this->image);
    }

}
