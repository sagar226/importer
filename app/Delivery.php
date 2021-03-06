<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'id','date', 'delivery_note_number','beat_name','uid','shop_name','invoice_number','net_receivable','invoice'
    ];
    public function deliveryData(){
        
        return $this->belongsTo(DeliveryData::class,'delivery_id','id');
    }
}
