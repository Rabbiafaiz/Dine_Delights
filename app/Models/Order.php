<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['chef_id','user_id','table_id','price','payment_gateway','payment_id','payment_gateway_id','payment_status','payment_status'];
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    //sir c pochna ha
    public function chef()
    {
        return $this->belongsTo(User::class, 'chef_id', 'id');
    }
    public function tables()
    {
        return $this->belongsToMany(Table::class,'order_id','id');
    }


}
