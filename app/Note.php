<?php

namespace App;

use App\Task;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
