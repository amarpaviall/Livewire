<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Podcast extends Model
{
    /** @use HasFactory<\Database\Factories\PodcastFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }

    public function listeningparties(): HasMany
    {
        return $this->hasMany(ListeningParty::class);
    }
}
