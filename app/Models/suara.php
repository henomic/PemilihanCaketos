<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class suara extends Model
{
    protected $table = 'suara';
    protected $guarded = ['id'];



    public function paslon(): BelongsTo
    {
        return $this->belongsTo(paslon::class, 'id_paslon', 'id');
    }
}
