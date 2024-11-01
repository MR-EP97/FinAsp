<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;
use App\Models\ExpenseIncome;

class IndexExpenseIncome extends Component
{
    public array $expenseIncomes;

    public function mount()
    {
        //        $user_id = Auth::user()->expenseIncomes();
        $this->expenseIncomes = User::find(1)
            ->expenseIncomes()
            ->orderBy('start_date', 'desc')
            ->get()
            ->toArray();
    }

    public function render(): View
    {
        return view('livewire.index-expense-income');
    }
}
