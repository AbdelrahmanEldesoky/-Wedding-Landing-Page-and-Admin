<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    protected $table = 'sections';
    protected $guarded = [];


    public function type()
    {
        return $this->belongsTo(TypeReservations::class);

    }//end fo category

    public function products()
    {
        return $this->hasMany(Product::class);

    }//end of product

}
