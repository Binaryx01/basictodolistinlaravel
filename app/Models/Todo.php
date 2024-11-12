<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Add the fillable property to specify which fields are mass-assignable
    protected $fillable = ['title', 'description', 'completed'];
}
