<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "estudiantes";
    protected $primaryKey = "id";
    protected $fillable = ["name","address"];
}
