<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    //Table name
    protected $table = "permissions";
    // primary key
    public $primaryKey = "id";

    
}
