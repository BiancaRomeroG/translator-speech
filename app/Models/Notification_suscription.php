<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification_suscription extends Model
{
    use HasFactory;

    protected $table = 'notification_suscriptions';
    protected $fillable = [
        'user_id',
        'suscription_id',
        'type',
        'dateExpired'
    ];
}
