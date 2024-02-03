<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['seats','qr','types'];
   //sir c confirm krna ha
    public function orders()
    {
        return $this->hasMany(Order::class, 'table_id', 'id');
    }
    public function order_table()
    {
        return $this->belongsToMany(Order::class,'order_table_pivot','table_id','order_id');
    }
}
