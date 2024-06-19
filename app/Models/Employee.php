<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $guarded = [];
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
    public function benefits(): HasMany
    {
        return $this->hasMany(Benefit::class);
    }
    public function productivities(): HasMany
    {
        return $this->hasMany(Productivity::class);
    }
    public function employmentStatuses(): HasMany
    {
        return $this->hasMany(EmploymentStatus::class);
    }
    public function payrolls(): HasMany
    {
        return $this->hasMany(Payroll::class);
    }
}
