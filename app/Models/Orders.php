<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function User() {
        return $this->belongsTo(User::class);
    }
    public function Item() {
        return $this->belongsTo(Item::class);
    }
    use HasFactory;
}
