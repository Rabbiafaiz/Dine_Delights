<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'introduction',
        'phone_no',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

    public function user_orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }

    public function chef_orders()
    {
        return $this->hasMany(Order::class, 'chef_id', 'id');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'user_id', 'id');
    }
    public function memberships()
    {
        return $this->hasMany(MembershipPurchased::class, 'user_id', 'id');
    }
    public function membership()
    {
        return $this->hasOne(MembershipPurchased::class, 'user_id', 'id')
        ->where('active', true);
    }
}

