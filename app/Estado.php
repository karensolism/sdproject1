<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{    
 protected $table= 'estados'; 
 //los campos que permiten un create se ponen todos..
 protected $fillable=["Activo', 'Estado"] ;
  protected $primaryKey='Id_estado';
  //fecha en la que se guardo
  public $timestamps=false;
}
