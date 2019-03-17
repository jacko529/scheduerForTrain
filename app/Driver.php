<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['title', 'first_name', 'surname','property_number', 'first_line_address','post_code', 'phone_number', 'route_id'];
    protected $table = 'drivers';
    protected $primaryKey = 'driver_id';


    public function route()
    {
        return $this->belongsTo(Route::class);
    }
    //
}
