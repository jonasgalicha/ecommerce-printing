<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SalesReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'amount',
        'down_payment',
        'status',
        'sales_date_id',
        'user_id',
    ];

    public function salesDate() : BelongsTo
    {
        return $this->belongsTo(SalesReport::class);
    }

}
