<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment_document extends Model
{
    use HasFactory;

    protected $fillable=[
'shipment_id',
'image',
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
