<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['price','image','name','decription','item_category_id'];
    public function item_category()
    {
      return $this->belongsTo(ItemCategory::class);
    }

    public function item_orders()
    {
        return $this->belongsToMany(Order::class,'item_id','id');
    }
}
