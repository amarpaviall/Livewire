<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListeningParty extends Model
{
    /** @use HasFactory<\Database\Factories\ListeningPartyFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'is_active' => 'boolen',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function episodes(): BelongsTo
    {
        return $this->belongsTo(Episode::class);
    }
}
