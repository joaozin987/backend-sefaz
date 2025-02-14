<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conta extends Model
{
    use HasFactory;

    protected $table = 'contas_';
    
    protected $fillable = ['nome', 'email', 'senha', 'setor'];
}
