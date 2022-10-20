<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table = 'subscriptions';
    protected $fillable = [
        'starts_at',
        'ends_at',
        'renewed_at',
        'id_user',
        'id_plan',
    ];
}
