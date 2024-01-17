<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserRole extends Model
{
    /**
     * This model needs to see:
     *  1) The User Table for their ID
     *  2) Permission table for the Permission Name (Is this table necessary or just reference for all the other code?)
     *  3) Role Permission Table to map their ID to the Permission Name
     */
    use HasFactory;
    protected $table='user_roles';

    //Not sure if this is an approriate look up at the moment
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
