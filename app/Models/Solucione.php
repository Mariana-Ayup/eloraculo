<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Solucione
 *
 * @property $id
 * @property $descripcion
 * @property $codig
 * @property $created_at
 * @property $updated_at
 *
 * @property Problema[] $problemas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Solucione extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'codig' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','codig'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function problemas()
    {
        return $this->hasMany('App\Models\Problema', 'solucion_id', 'id');
    }
    

}
