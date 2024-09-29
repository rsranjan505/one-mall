<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'company_name',
        'address',
        'city',
        'postcode',
        'status',
        'is_urgent',
        'cancel_reason',
        'cancel_date',
        'total_amount',
        'expected_date',
        'shipping_charge',
        'delivered_date',
        'order_number'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'expected_date',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order_items(){
        return $this->hasMany(OrderItem::class);
    }

}
