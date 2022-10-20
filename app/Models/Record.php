<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $table = 'records';
    protected $fillable = [
        'path_file_input',
        'path_file_output',
        'id_user',
    ];
}
