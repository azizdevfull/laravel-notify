<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id'];

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class); // one to many relationship with User model.
    }
}
