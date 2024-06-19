<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $guarded = [];
    public function positions(): HasMany
    {
        return $this->hasMany(Position::class);
    }
}
