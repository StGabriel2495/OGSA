<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class glossaire extends Model
{
    //use HasFactory;

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
     * Get the post that owns the comment.
     */
    public function illicitepractice(): BelongsTo
    {
        return $this->belongsTo(Illicitepractice::class);
    }
}
