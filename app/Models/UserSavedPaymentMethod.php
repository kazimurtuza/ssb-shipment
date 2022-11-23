<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSavedPaymentMethod extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'stripe_user_id',
        'card_last_for_digit',
        'card_name',
        'country',
        'exp_month',
        'exp_year',
        'status',
    ];
}
