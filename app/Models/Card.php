<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    //Table name
    protected $table = "cards";
    // primary key
    public $primaryKey = "id";
    
}
