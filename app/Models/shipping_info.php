<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipping_info extends Model
{
    use HasFactory;

    protected  $fillable=[
          'container_name',
          'container_no',
          'delivery_date',
          'shipping_date',
          'is_use',
    ];
}
