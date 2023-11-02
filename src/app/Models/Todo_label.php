<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo_label extends Model
{
    use SoftDeletes;

    protected $fillable = ['label'];

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}
