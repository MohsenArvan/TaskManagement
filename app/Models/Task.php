<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'lable',
        'status',
        'board_id',
        'due_date',
        'completed_at',
        'priority',
    ];

    public function board()
    {
        return $this->belongsTo(Board::class);
    }
}
