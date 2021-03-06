<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Get all of the cities for the state.
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }

}
