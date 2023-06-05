<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = "INFO_PERSONAL";
    protected $primaryKey = "identificacion";
    protected $fillable = ["direccion","telefono"];
}
