<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;

    /**
     * Busca a que indicador se refere o valor.
     */
    public function indicator()
    {
        return $this->belongsTo(Indicator::class, 'indicador_id');
    }

    /**
     * Busca a que ente se refere o indicador.
     */
    public function indicator()
    {
        return $this->belongsTo(Indicator::class, 'indicador_id');
    }

}
