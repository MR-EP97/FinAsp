<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExpenseIncome extends Model
{
    protected $fillable = [
        'amount',
        'title',
        'type',
        'period',
        'start_date',
        'end_date',
        'number_of_periods',
        'description',
        'user_id',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function getPassedPeriodAttribute()
    {
        $n = '100';
        $m = '200';

        $start_date = Carbon::parse($this->start_date);
        $now = Carbon::parse(Carbon::now());
        //    N / M


        if ($this->end_date) {
            $end_date = Carbon::parse($this->end_date);

            switch ($this->period) {
                case 'monthly':
                    $m = $start_date->diffInMonths($end_date);
                    $n = $start_date->diffInMonths($now);
                    break;
                case 'weekly':
                    $m = $start_date->diffInWeeks($end_date);
                    $n = $start_date->diffInWeeks($now);
                    break;
                case 'daily':
                    $m = $start_date->diffInDays($end_date);
                    $n = $start_date->diffInDays($now);
                    break;
                default:
                    __('Blank');
            }
            return (int)$n . '/' . (int)$m;

        }

        if ($this->number_of_periods) {
            switch ($this->period) {
                case 'monthly':
                    $n = $start_date->diffInMonths($now);
                    break;
                case 'weekly':
                    $n = $start_date->diffInWeeks($now);
                    break;
                case 'daily':
                    $n = $start_date->diffInDays($now);
                    break;
                default:
            }
            return (int)$n . '/' . $this->number_of_periods;
        }

        return __('Blank');

    }


}
