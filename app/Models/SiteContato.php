<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model{

    protected $fillable = [

        'nome','phone', 'email', 'motivo_contato', 'mensagem',

    ];

}
