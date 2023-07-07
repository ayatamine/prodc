<?php

namespace App\Models;

use App\Models\User;
use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Professional extends User
{
    use HasFactory,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'account_type',
        'company_id',
        'country_id',
        'is_closed_tomporary',
        'employment_rate',
        'work_days',
        'website_url',
        'commercial_register_no',
        'is_subscribed_to_newsletter',
        'swear_on_ethiks',
        'is_giving_promotions',
        'has_service_after_sale',
        'accept_installment_sale',
        'company_name',
        'company_address',
        'company_country',
        'company_phone_number',
        'company_email',
        'company_field',
        'company_website_url',
        'company_presenter_name',
        'company_presenter_phone_number',
        'company_presenter_email',
        'company_presenter_job',
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
        // 'company_id' => 'integer',
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


    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
    // public function company(): BelongsTo
    // {
    //     return $this->belongsTo(ProfessionalCompany::class);
    // }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function reviews():HasMany
    {
        return $this->hasMany(Review::class);
    }
  
}
