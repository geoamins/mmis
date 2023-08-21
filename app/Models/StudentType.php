<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentType extends Model
{
    use HasFactory;
    protected $table = 'setup_student_type';
    protected $primaryKey = 'StudentTypeID';
    protected $fillable = ['StudentTypeID','StudentType'];
}
