<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tareas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fichaje', 'Nombre', 'Mensaje', 'Correo'];

    
}
