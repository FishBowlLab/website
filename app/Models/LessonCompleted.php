<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonCompleted extends Model
{
    use HasFactory;
    //Table name
    protected $table = "lessons_completed";
    // primary key
    public $primaryKey = "id";
    
    public function module(){
        return $this->belongsTo("App\Models\Module");
    }

}
