<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fichajestarea extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fichajestareas';

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
    protected $fillable = ['id_fichatarea', 'id_proyecto', 'id_tarea', 'id_asistencia', 'fech_ini', 'fech_fin'];

    
}
