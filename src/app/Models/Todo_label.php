<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo_label extends Model
{
    use HasFactory;

    protected $fillable = ['label'];

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}
