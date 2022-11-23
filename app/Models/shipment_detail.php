<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment_detail extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
           'shipment_id',
           'category_id',
           'sub_category_id',
           'name',
           'quantity',
           'weight',
           'box_length',
           'box_width',
           'box_height',
           'uni_price',
           'total_price',
           'status',
           'created_at',
           'created_by',
           'updated_at',
           'updated_by',
           'deleted',
           'deleted_at',
           'deleted_by',
    ];

    public function shipment(){
        return $this->belongsTo(shipment::class,'shipment_id','id');
    }
    public function standerProduct(){
        return $this->belongsTo(stander_product_category::class,'sub_category_id','id');
    }
}
