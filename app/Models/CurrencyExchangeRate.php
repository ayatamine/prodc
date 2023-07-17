<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CurrencyExchangeRate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_currency_id',
        'to_currency_id',
        'exchange_rate',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'from_currency_id' => 'integer',
        'to_currency_id' => 'integer',
        'exchange_rate' => 'double',
    ];

    public function fromCurrency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    public function toCurrency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }
}
