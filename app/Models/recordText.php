<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recordText extends Model
{
    use HasFactory;

    protected $table = 'record_texts';
    protected $fillable = [
        'path_file_input',
        'path_file_output',
        'language_input',
        'language_output',
        'id_user',
    ];

}
