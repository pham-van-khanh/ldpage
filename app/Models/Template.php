<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Template extends Model
{
    protected $fillable=['name','slug','type','thumbnail','description','config_json','is_active'];
    protected $casts=['config_json'=>'array','is_active'=>'boolean'];
    public function events(): HasMany { return $this->hasMany(Event::class); }
}
