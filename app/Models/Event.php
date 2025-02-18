<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'destination',
        'total_people',
        'from_date',
        'to_date',
        'total_days',
        'is_active',
        'is_featured',
    ];


    // Returns event duration in a formatted string
    public function getEventDateAttribute()
    {
        return "{$this->to_date} - {$this->from_date}";
    }

    // Safely returns event organizer name (prevents errors if user is null)
    public function getEventOrganizerAttribute()
    {
        return optional($this->user)->name ?? 'Unknown Organizer';
    }

    // Checks if the event is still active based on the current date
    public function getIsCurrentlyActiveAttribute()
    {
        return Carbon::now()->lt(Carbon::parse($this->to_date));
    }
}
