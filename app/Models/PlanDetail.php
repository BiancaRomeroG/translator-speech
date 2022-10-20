<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanDetail extends Model
{
    use HasFactory;
    protected $table = 'plan_details';
    protected $fillable = [
        'discription',
        'id_plan',
    ];
}
