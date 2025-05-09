<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Computer extends Model
{
    public function apprentices(): HasMany
    {
        return $this->hasMany(Apprentice::class);
    }
}
