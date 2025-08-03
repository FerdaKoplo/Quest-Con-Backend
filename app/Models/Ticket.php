<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'ticket_type'
    ];


    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class,  'event_id');
    }


    public function rsvps(): HasMany
    {
        return $this->hasMany(RSVPS::class,  'r_s_v_p_s_id');
    }
}
