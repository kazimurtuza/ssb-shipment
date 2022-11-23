<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stripe_payment extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $fillable=[
      'stripe_id',
      'total_amount',
      'date',
      'receipt_url',
      'status',
      'created_at',
      'created_by',
      'updated_at',
      'updated_by',
      'deleted',
      'deleted_at',
      'deleted_by',
    ];

    public function shipmentinfo(){
        return $this->hasOne(shipment::class,'stripe_payment_id','id');
    }
}
