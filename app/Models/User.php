<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Skill;
use App\Models\UserSkill;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'username',
        'email',
        'verification_token',
        'password',
        'email_verified_at',
        'phone_number',
        'profile_photo_path',
        'bio',
        'country_id',
        'birth_date',
        'account_status',
        'is_reported',
        'is_account_verified',
        'phone_verified_at',
        'gender',
        'oauth_taken',
        'city',
        'job_id',
        'last_seen',
        'location',
        'is_subscribed_to_newsletter',
        'remember_token',
        'social_id',
        'social_type',
        'package_id',
        'job_position_title',
        //
        'id_card_front',
        'id_card_back',
        'id_card_both',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function professional(): HasOne
    {
        return $this->hasOne(Professional::class);
    }
    public function client(): HasOne
    {
        return $this->hasOne(Client::class);
    }
    public function company(): BelongsTo
    {
        return $this->belongsTo(ProfessionalCompany::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
    public function isInFreePackage(): bool
    {
        return $this->professional()->first() &&  $this->package_id == 1;
    }
    public function skills():BelongsToMany
    {
        
        return $this->belongsToMany(
            Skill::class,
            UserSkill::class,
            'user_id',
            'skill_id',
            'id',
            'id'
        );
    }
}
