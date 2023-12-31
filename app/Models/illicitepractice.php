<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class illicitepractice extends Model
{
    //use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label',
        'description',
        
    ];

    /**
     * Get the comments for the blog post.
     */
    public function glossaire(): HasMany
    {
        return $this->hasMany(Glossaire::class);
    }

    
}
