<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{

    protected $fillable = ['name', 'phone', 'email', 'motivo_contato', 'mensagem'];
}
