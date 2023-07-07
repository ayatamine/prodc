<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'professional_id',
        'client_id',
        'rating',
        'comment',
    ];
    protected $casts=[
        'professional'=>'integer',
        'client_id'=>'integer',
    ];
    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
