<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TypeReservations extends Model
{

    protected $table = 'type_reservations';
    protected $guarded = [];


    public function sections()
    {
        return $this->hasMany(Section::class);

    }//end of section

    

}
