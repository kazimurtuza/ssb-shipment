<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable=[
        'driver_name',
        'email',
        'mobile',
        'vehicle_number',
        'gas_card_number',
        'profit_percentage',
        'email_status',
        'pay_status',
        'status',
        'fixed',
        'per_mile',
        'percentage_revenue',
        'created_by',
        'updated_by',
    ];
}
