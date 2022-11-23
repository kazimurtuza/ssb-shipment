<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DropShipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'shipping_id',
        'container_number',
        'shipment_drop_date',
        'shipment_drop_location',
        'start_time',
        'end_time',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted',
        'deleted_at',
        'deleted_by',
    ];
}
