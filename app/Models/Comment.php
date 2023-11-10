<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //use HasFactory;
    
   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject',
        'description',
        'path',
        'statut',
    ];

         /**
     * Get the post that owns the comment.
     */
    public function contract(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }
}