<?php

namespace FotoPrisma;

use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    protected $table='Informacion';

    protected $primaryKey='idInformacion';

    public $timestamps=false;


	protected $fillable =[
     
    	'idCategoria',
    	'Mision',
    	'Vision',
    	'HorarioAtencion',
    	'Contactenos'

    	
    ];

    protected $guarded =[

    
    ];
}
