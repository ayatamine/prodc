<?php

namespace App\Models;

use Exception;
use App\Models\Client;
use App\Models\AgainstReport;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    // public static function boot()
    // {
    //     parent::boot();
    //     self::saving(function ($project) {
    //         try {
    //             $project->client_id = auth()->user()->client()->first()?->id;
    //             $project->save();
    //         }
    //         catch(Exception $ex){
    //             Notification::make() 
    //             ->title('when creating  a service '.$ex->getMessage())
    //             ->error()
    //             ->duration(7000) 
    //             ->send(); 
    //         }
    //     });
    // }   
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
        'images',
        'questions',
        'job_id',
        'title_ar',
        'title_fr'
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
        'images'=>'array',
        'questions'=>'array',
    ];
    public function client():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function scopeOpen($query){
        return $query->where('is_open',true);
    }
    public function scopePublished($query){
        return $query->where('timeline_point','published');
    }
    public function scopeProcessing($query){
        return $query->where('timeline_point','processing');
    }
    public function scopeFinished($query){
        return $query->where('timeline_point','finished');
    }
    public function against_reports():MorphMany
    {
        return $this->morphMany(AgainstReport::class,'reportable');
    }
}
