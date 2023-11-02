<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'completed', 'label_id'];

    public function todo_labels()
    {
        return $this->belongsTo(Todo_label::class);
    }
}
