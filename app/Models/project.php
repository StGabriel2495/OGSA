<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    //use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable =
        [
        'label',
        'description',
        ];

        /**
     * Get the post that owns the comment.
     */
    public function contract(): BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }
}
