<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Review extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'game_id',
        'content',
        'is_recommended',
        'helpful_count',
        'images'
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_recommended' => 'boolean',
        'images' => 'array'
    ];
    
    /**
     * Get the user who wrote the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Get the game that was reviewed.
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
