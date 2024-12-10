<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class paslon extends Model
{
    protected $table = 'paslon';






    public function periode(): BelongsTo
    {
        return $this->belongsTo(periode::class, 'id_periode', 'id');
    }

    public function suara(): HasMany
    {
        return $this->hasMany(suara::class, 'id_paslon', 'id');
    }
}
