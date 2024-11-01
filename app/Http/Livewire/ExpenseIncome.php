<?php

namespace App\Http\Livewire;

use Closure;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\ExpenseIncome as ExpenseIncomeModel;

class ExpenseIncome extends Component
{

    public $amount;
    public $title;
    public $type;
    public $description;
    public $startDate;
    public $endDate;

    public $period;
    public $durationType;
    public $numberOfPeriod;

    protected function rules(): array
    {
        return [
            'amount' => 'required',
            'title' => 'required',
            'type' => 'required|in:income,expense',
            'period' => 'string',
            'startDate' => 'required|date',
            'endDate' => 'date|nullable|required_without:numberOfPeriod',
            'numberOfPeriod' => 'integer|nullable|required_without:endDate',
            'description' => 'max:150',
        ];
    }

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function setDuration($durationType)
    {

        $this->durationType = $durationType;
    }

    public function submit()
    {
        $request = array_merge($this->validate(), ['user_id' => 1]);

        switch ($this->durationType) {
            case 'numberOfPeriod':
                unset($request['EndDate']);
                break;
            case 'EndDate':
                unset($request['numberOfPeriod']);
                break;
        }
//        dd($request);

        ExpenseIncomeModel::query()
            ->create([
                'amount' => $this->amount,
                'title' => $this->title,
                'type' => $this->type,
                'period' => $this->period,
                'start_date' => $this->startDate,
                'end_date' => $this->endDate,
                'number_of_periods' => $this->numberOfPeriod,
                'description' => $this->description,
                'user_id' => 1
            ]);


        $this->reset();

        session()->flash('status', __('Submit Successfully'));
    }

    public function render(): View
    {
        return view('livewire.expense-income');
    }
}
