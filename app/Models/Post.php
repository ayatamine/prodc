<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'tags',
        'keywords',
        'meta_seo',
        'is_publishable',
        'language_id',
        'post_category_id',
        'user_id',
        'image'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'is_publishable' => 'boolean',
        'language_id' => 'integer',
        'post_category_id' => 'integer',
    ];

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    public function postcategory(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class,'post_category_id','id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopePublishable($query)
    {
        return $query->where('is_publishable',true);
    }
    public function createdAt():Attribute
    {
        return Attribute::make(
            get:fn($value) =>$value ? Carbon::parse($value)->locale(app()->getLocale())->isoFormat('D MMM YYYY'): null
        );
    }
    public function image():Attribute
    {
        return Attribute::make(
            get:fn($value) =>Str::startsWith($value,'posts') ? url('storage/'.$value) : $value
        );
    }
    public function comments():HasMany
    {
        return $this->hasMany(PostComment::class);
    }
}
