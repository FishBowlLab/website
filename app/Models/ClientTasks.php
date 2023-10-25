<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ClientTasks extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable = [
        'taskID',
        'timestamps', // This is currently the timestamp of creation
        'client_ID',
        'name',
        'component',
        'status',
        'notes',
    ];
}
