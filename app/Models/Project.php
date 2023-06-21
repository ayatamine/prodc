<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'is_open',
        'duration',
        'timeline_point',
        'min_budget',
        'max_budget',
        'real_amount',
        'professional_id',
        'client_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'is_open' => 'boolean',
        'duration' => 'integer',
        'min_budget' => 'float',
        'max_budget' => 'float',
        'real_amount' => 'float',
        'professional_id' => 'integer',
        'client_id' => 'integer',
    ];
}
