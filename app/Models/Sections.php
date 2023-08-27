<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;
    protected $table = 'setup_section';
    protected $primaryKey = 'SectionID';
    protected $fillable = ['SectionID','SectionName','ClassID'];
}
