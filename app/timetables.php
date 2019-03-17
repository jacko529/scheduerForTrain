<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class timetables extends Model
{
    protected $fillable = ['timetable','date'];
    protected $table = 'timetables';
    protected $primaryKey = 'id';

    public $timestamps = false;
}
