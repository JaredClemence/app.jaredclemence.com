<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
    	'name',
	'description',
	'client_number',
	'puppy_points',
	'severity',
	'deadline',
	'completed'
    ];

    protected $casts = [
        'deadline' => 'datetime', // Automatically cast deadline to Carbon instance
    ];

    public function getPriorityScoreAttribute()
    {
        $timeRemaining = max(1, now()->diffInMinutes($this->deadline, false));
        return ($this->puppy_points + $this->severity) / $timeRemaining;
    }
}
