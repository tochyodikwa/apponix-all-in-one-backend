<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $table="advertise";
    protected $primaryKey="ad_id";
    public $timestamps=false;
}
