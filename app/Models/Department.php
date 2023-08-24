<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'setup_department';
    protected $primaryKey = 'DeptID';
    protected $fillable = ['DeptID','DepartmentName'];
}
