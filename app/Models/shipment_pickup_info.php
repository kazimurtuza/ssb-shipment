<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment_pickup_info extends Model
{
    use HasFactory;
    public  $timestamps=false;
    protected  $fillable=[
            'driver_id',
            'shipping_id',
            'shipping_code',
            'pickup_code',
            'pickup_date',
            'shipping_date',
            'status',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'deleted',
            'deleted_at',
            'deleted_by',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function driver(){
        return $this->belongsTo(driver::class,'driver_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipping(){
        return $this->belongsTo(shipping_info::class,'shipping_id','id');
    }
}
