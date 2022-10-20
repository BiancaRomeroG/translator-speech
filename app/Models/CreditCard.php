<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;
    protected $table = 'credit_cards';
    protected $fillable = [
        'cc_number',
        'cc_cvv',
        'cc_expiry',
        'status',
        'id_user',
    ];
}
