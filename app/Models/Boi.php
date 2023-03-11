<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boi extends Model
{
    use HasFactory;
    protected $table = 'bois';
    protected $primaryKey = 'id';
    protected $filebase = ['codigo','leite','ração','datanascimento'];

}
