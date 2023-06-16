<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Professional extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'email_verified_at',
        'phone_number',
        'profile_photo_path',
        'bio',
        'account_type',
        'company_id',
        'country_id',
        'birth_date',
        'account_status',
        'is_reported',
        'is_account_verified',
        'phone_verified_at',
        'gender',
        'oauth_taken',
        'is_closed_tomporary',
        'city',
        'job_id',
        'employment rate',
        'work_days',
        'last_seen',
        'location',
        'website_url',
        'commercial_register_no',
        'is_subscribed_to_newsletter',
        'swear_on_ethiks',
        'is_giving_promotions',
        'has_service_after_sale',
        'accept_installment_sale',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email_verified_at' => 'datetime',
        'company_id' => 'integer',
        'country_id' => 'integer',
        'birth_date' => 'date',
        'account_status' => 'boolean',
        'is_reported' => 'boolean',
        'is_account_verified' => 'boolean',
        'phone_verified_at' => 'datetime',
        'is_closed_tomporary' => 'boolean',
        'job_id' => 'integer',
        'employment rate' => 'integer',
        'work_days' => 'array',
        'last_seen' => 'datetime',
        'location' => 'array',
        'is_subscribed_to_newsletter' => 'boolean',
        'swear_on_ethiks' => 'boolean',
        'is_giving_promotions' => 'boolean',
        'has_service_after_sale' => 'boolean',
        'accept_installment_sale' => 'boolean',
    ];

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
}
