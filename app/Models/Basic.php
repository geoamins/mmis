<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    use HasFactory;
    protected $table = 'setup_country';
    protected $primaryKey = 'CountryID';
    protected $fillable = ['CountryID','CountryName'];

}