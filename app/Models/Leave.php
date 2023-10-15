<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $table = 'student_leave';
    protected $primaryKey = 'LeaveID';
    protected $fillable = [
        'FromDate',
        'ToDate',
        'Reason',
        'Status',
        'StudentID',
    ];
}
