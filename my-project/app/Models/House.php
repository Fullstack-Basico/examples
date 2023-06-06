<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $table = "houses";
    protected $primaryKey = "id";
    protected $fillable =["direccion", "tipo", "plantas"];
}
