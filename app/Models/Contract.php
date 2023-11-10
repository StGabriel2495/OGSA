<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'path',
        'size',
        'project_id',
         'sector_id',
        'zoneofinterest_id',
            'ressource_id',
            'contracttype_id',
            'stateentite_id',
            'comment_id',
    ];
}
