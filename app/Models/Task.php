<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected function casts()
    {
        return [
            'is_recurring' => 'boolean',
            'completed_at' => 'datetime',
            'task_date' => 'datetime'
        ];
    }
}
