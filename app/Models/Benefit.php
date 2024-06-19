<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Benefit extends Model
{
    use HasFactory;
    protected $table = 'benefits';
    protected $guarded = [];
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
