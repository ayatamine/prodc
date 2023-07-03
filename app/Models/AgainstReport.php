<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AgainstReport extends Model
{
    use HasFactory;
    protected $fillable=['reportable_id','reportable_type','user_id','description'];
    protected static function booted()
    {
        parent::boot();
        static::creating(function ($against_report) {
            $against_report->user_id = Auth::id();
        });
    }
    /**
     * Get the reportable model that the image belongs to.
     *
     * @return MorphTo
     */
    public function reportable(): MorphTo
    {
        return $this->morphTo();
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
