<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $name = '';
    public $startTime;

    public function createListingParty(){

    }
    public function with() {
        return [
            'listening_parties' => ListeningParty::all(),
        ];
    }
}; ?>

<div>
    //
</div>
