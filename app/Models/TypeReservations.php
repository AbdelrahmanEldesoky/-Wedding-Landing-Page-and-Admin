<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TypeReservations extends Model
{

    protected $table = 'type_reservations';
    protected $guarded = [];

    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('website/images/' . $this->image);
    }
    public function sections()
    {
        return $this->hasMany(Section::class);

    }//end of section



}
