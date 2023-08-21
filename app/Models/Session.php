<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table = 'setup_session';
    protected $primaryKey = 'SessionID';
    protected $fillable = ['SessionID','SessionTitle'];
}
