<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Problema
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $codigo
 * @property $tipo
 * @property $solucion_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Solucione $solucione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Problema extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'descripcion' => 'required',
		'tipo' => 'required',
		'solucion_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','descripcion','codigo','tipo','solucion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function solucione()
    {
        return $this->hasOne('App\Models\Solucione', 'id', 'solucion_id');
    }
    

}
