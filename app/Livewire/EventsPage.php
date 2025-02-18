<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Event;

#[Title('Events 🎉')]
class EventsPage extends Component
{
    public function render()
    {
        return view('livewire.events-page',[
            'events' => Event::all()
        ]);
    }
}
