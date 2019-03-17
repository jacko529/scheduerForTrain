<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['route_id', 'start_location', 'end_location'];
    protected $table = 'routes';
    protected $primaryKey = 'route_id';

    public $incrementing = false;


    public function driver()
    {
        return $this->hasMany('App\Driver', 'route_id', 'route_id');
    }
}
