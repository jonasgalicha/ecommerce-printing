<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SalesDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'date'
    ];

    public function salesReports() : HasMany
    {
        return $this->hasMany(SalesReport::class);
    }

}
