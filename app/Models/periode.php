<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class periode extends Model
{
    protected $table = 'periode';
    protected $guarded = ['id'];

    /**
     * Get all of the paslon for the periode
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paslon(): HasMany
    {
        return $this->hasMany(paslon::class, 'id_periode', 'id');
    }
}
