<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id'];

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class); // one to many relationship with User model.
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
