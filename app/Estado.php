<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    
protected $primaryKey='Id_estado';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Activo', 'Estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
  
}
