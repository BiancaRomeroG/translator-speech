<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records_image extends Model
{
    use HasFactory;
    protected $table = 'records_images';
    protected $fillable = [
        'path_image_input',
        'text_translated',
        'lang_input',
        'lang_output',
        'id_user',
    ];
}
