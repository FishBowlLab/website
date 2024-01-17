<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Contracts\Auth\CanResetPassword;
//class User extends Authenticatable implements MustVerifyEmail

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
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
    public function role():HasOne {
        return $this->hasOne(UserRole::class, 'user_id');
    }
    public function roleName(): HasManyThrough{
        return $this->hasManyThrough(
            Permission::class,      // final model we want to access
            UserRole::class,        // intermediate model we are accessing
            /*
            'id',                   // Foreign key on the roles table
            'id',                   // Foreign key on the permissions table
            'id',                   // local key on the users table
            'permission_id',        // Local key on the roles table
            */
        );
    }
}
