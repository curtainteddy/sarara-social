<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('My Feed 📰')]
class FeedPage extends Component
{
    public function render()
    {
        return view('livewire.feed-page');
    }
}
