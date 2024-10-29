<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExpenseIncome extends Model
{
    protected $fillable = [
        'amount',
        'title',
        'type',
        'description',
        'date',
        'period',
        'user_id',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
