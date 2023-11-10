<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
   // use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'path',
        'size',
        'signaturedate',
        ];

        /**
     * Get the comments for the blog post.
     */
    public function sector(): HasMany
    {
        return $this->hasMany(Sector::class);
    }
    public function contracttype(): HasMany
    {
        return $this->hasMany(Contracttype::class);
    }
    public function Project(): HasMany
    {
        return $this->hasMany(Project::class);
    }
    public function illicitepractice(): HasMany
    {
        return $this->hasMany(Illicitepractice::class);
    }
    public function documenttype(): HasMany
    {
        return $this->hasMany(Documenttype::class);
    }
    public function stateentite(): HasMany
    {
        return $this->hasMany(Stateentite::class);
    }
    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function ressource(): HasMany
    {
        return $this->hasMany(Ressource::class);
    }
}
