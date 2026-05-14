<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Trip extends Model
{
    protected $fillable=['event_id','title','slug','location','cover_image','start_date','end_date','duration_text','weather_text','mood_text','opening_note','diary_text','ending_quote','map_url','footer_text','sort_order','is_active'];
    protected $casts=['start_date'=>'date','end_date'=>'date','is_active'=>'boolean'];
    public function event(): BelongsTo { return $this->belongsTo(Event::class); }
    public function images(): HasMany { return $this->hasMany(TripImage::class)->orderBy('sort_order'); }
    public function memories(): HasMany { return $this->hasMany(TripMemory::class)->orderBy('sort_order'); }
    public function schedules(): HasMany { return $this->hasMany(TripSchedule::class)->orderBy('sort_order'); }
}
