<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class zoneofinterest extends Model
{
   // use HasFactory;
   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function illicitepractice(): HasMany
    {
        return $this->hasMany(Illicitepractice::class);
    }
}
