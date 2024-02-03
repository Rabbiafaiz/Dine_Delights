<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['quantity','price'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function order_items()
    {
        return $this->belongsToMany(Item::class, 'order_id', 'id');
    }
}
