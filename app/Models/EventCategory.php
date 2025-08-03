<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class EventCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_category_name',
        'slug',
        'event_category_description',
        'is_active'
    ];

    public function setEventCategoryNameAttribute($value)
    {
        $this->attributes['event_category_name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function event(): HasMany
    {
        return $this->hasMany(Event::class,  'event_id');
    }
}
