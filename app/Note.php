<?php

namespace App;

use App\Task;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    
	protected $fillable = [
        'body', 'task_id',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
