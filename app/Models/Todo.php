<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public function scopeTitle ($query) {
        // echo ($query);
        return $query->where("context", "=", "test");
    }

    public function calc ($number) {
        return $number + 5;
    }
}
