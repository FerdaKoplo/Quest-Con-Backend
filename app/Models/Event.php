<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $fillable = [
        'user_id',
        'event_category_id',
        'event_name',
        'event_description',
        'event_location',
        'event_start_at',
        'event_end_at',
        'event_status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function eventCategory(): BelongsTo
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function ticket(): HasMany
    {
        return $this->hasMany(Ticket::class, 'ticket_id');
    }

    public function media(): HasMany
    {
        return $this->hasMany(EventMedia::class, 'event_id');
    }

    public function rsvps(): HasMany
    {
        return $this->hasMany(RSVPS::class, 'r_s_v_p_s_id');
    }

    public function attendance(): HasMany
    {
        return $this->hasMany(Attendance::class, 'attendance_id');
    }

}
