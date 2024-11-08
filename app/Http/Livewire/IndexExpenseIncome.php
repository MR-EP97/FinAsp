<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;
use App\Models\ExpenseIncome;

class IndexExpenseIncome extends Component
{
    public array $expenseIncomes;



    public function mount(Request $request)
    {

        $this->expenseIncomes = Auth::user()
            ->expenseIncomes()
            ->orderBy('start_date', 'desc')
            ->getModels();

//        dd($this->expenseIncomes->get());
    }

    public function render(): View
    {
        return view('livewire.index-expense-income');
    }
}
