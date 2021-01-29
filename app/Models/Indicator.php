<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'description',
        'remote_id',
        'source_url',
        'direction',
        'competency',
        'competency_id'
    ];

    /**
     * Busca os valores do indicador.
     */
    public function valores()
    {
        return $this->hasMany(Value::class, 'indicador_id');
    }

}
