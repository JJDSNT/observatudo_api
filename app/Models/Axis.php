<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Axis extends Model
{


    /**
     * Get all of the indicators of the axis.
     */
    public function indicadores()
    {
        return $this->hasMany(Indicator::class);
    }

}
