<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = 'student_attendance';
    protected $primaryKey = 'AttID';
    protected $fillable = [
        'Date',
        'Status',
        'StudentID',
    ];
}
