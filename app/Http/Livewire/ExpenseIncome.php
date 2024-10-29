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
    public $date;
    public $period;

    protected function rules(): array
    {
        return [
            'amount' => 'required',
            'title' => 'required',
            'type' => 'required|in:income,expense',
            'description' => 'required:max:150',
            'date' => 'date',
            'period' => 'string',
        ];
    }

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $request = array_merge($this->validate(), ['user_id' => 1]);

        ExpenseIncomeModel::query()->create(
            $request
        );

        $this->reset();

        return redirect()->back()->withStatus(__('Submit Successfully'));
    }

    public function render(): View
    {
        return view('livewire.expense-income');
    }
}
