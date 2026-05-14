<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $fillable = ['user_id','template_id','title','slug','event_type','status','main_title','short_description','cover_image','music_url','intro_note','main_quote','footer_text','views_count','published_at','custom_data_json'];
    protected $casts = ['custom_data_json' => 'array', 'published_at' => 'datetime'];
    public function template(): BelongsTo { return $this->belongsTo(Template::class); }
    public function trips(): HasMany { return $this->hasMany(Trip::class)->orderBy('sort_order'); }
    public function timelines(): HasMany { return $this->hasMany(EventTimeline::class)->orderBy('sort_order'); }
    public function wishlists(): HasMany { return $this->hasMany(DestinationWishlist::class)->orderBy('sort_order'); }
}
