<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
          'user_id',
          'stripe_payment_id',
          'shipment_no',
          'from_address',
          'to_address',
          'total_item',
          'phone',
          'receiver_name',
          'receiver_phone',
          'receiver_email',
          'for_charity',
          'from_lat',
          'from_lng',
          'total_bill',
          'sender_name',
          'sender_mail',
          'shipping_id',
          'is_mail_send',
          'distance',
          'pickup_time',
          'payment_status',
          'drop_off_id',
          'is_drop_off',
          'status',
          'created_at',
          'created_by',
          'updated_at',
          'updated_by',
          'deleted',
          'deleted_at',
          'deleted_by',
    ];

    public function payment(){
        return $this->belongsTo(stripe_payment::class,'stripe_payment_id','id');
    }
}
