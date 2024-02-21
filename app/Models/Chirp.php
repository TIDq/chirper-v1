<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * 
     */
    protected $fillable = [
        'message',
    ];

    /**
     * Get the user that owns the chirp.
     */     
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
