<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    protected $table = 'trip';
    
    protected $fillable = [
        'tripid','tripname','note','userid','header_trip','downline_status','trip_status',
    ];

}
