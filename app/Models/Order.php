<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_number',
        'user_id',
        'first_name',
        'last_name',
        'company_name',
        'address',
        'city',
        'state',
        'country',
        'postcode',
        'phone',
        'email',
        'status',
        'is_urgent',
        'is_accounted',
        'cancel_reason',
        'cancel_date',
        'order_notes',
        'total_amount',
        'payment_mode',
        'payment_status',
        'expected_date',
        'delivered_date',
        'shipping_charge_id',

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
