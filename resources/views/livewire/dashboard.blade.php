<?php

use Livewire\Volt\Component;
use Livewire\Attributes\validate;
use App\Models\ListeningParty;

new class extends Component {
    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required')]
    public $startTime;
    
    #[Validate('required|url')]
    public string $mediaUrl = '';

    public function createListeningParty(){
        $this->validate();
        //dd($this->name , $this->startTime, $this->mediaUrl);
        $listeningParty = ListeningParty::Create([
            'episode_id' => 
            'name' = $this->name,
            'start_time' => $this->startTime
        ])
    }
    public function with() {
        return [
            'listening_parties' => ListeningParty::all(),
        ];
    }
}; ?>

<div class="flex flex-col min-h-screen pt-8 bg-emerald-50">
     {{-- Top Half: Create New Listening Party Form --}}
    <div class="flex items-center justify-center p-4">
        <div class="w-full max-w-lg">
            <x-card shadow="lg" rounded="lg">
                <h2 class="font-serif text-xl font-bold text-center">Let's listen together.</h2>
                <form wire:submit='createListeningParty' class="mt-6 space-y-6">
                    <x-input wire:model='name' placeholder="Listening Party Name" />
                    <x-input wire:model='mediaUrl' placeholder="Podcast RSS Feed URL"
                        description="Entering the RSS Feed URL will grab the latest episode" />
                    <x-datetime-picker wire:model='startTime' placeholder="Listening Party Start Time"
                        :min="now()->subDays(1)" />
                    <x-button type="submit" class="w-full">Create Listening Party</x-button>
                </form>
            </x-card>
        </div>
    </div>
</div>
