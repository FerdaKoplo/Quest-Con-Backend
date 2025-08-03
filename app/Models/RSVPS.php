<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RSVPS extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_id',
        'ticket_id',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,  'other_key');
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class,  'event_id');
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class,  'ticket_id');
    }

    public function attendance(): HasMany
    {
        return $this->hasMany(Attendance::class, 'attendance_id');
    }
}
