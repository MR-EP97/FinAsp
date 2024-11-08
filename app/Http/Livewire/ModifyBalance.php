<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;

class ModifyBalance extends Component
{

    public $balance;
    public $amount = 0.00;
    protected $user_id;
    public $durationType;

    public $userId;


    public function __construct()
    {
        $this->user_id = Auth::user()->id;
    }


    public function mount(): void
    {
        $this->balance = User::where('id', $this->user_id)->value('balance');
    }

    public function increment(): void
    {
        $this->balance += $this->amount;
    }

    public function decrement(): void
    {
        $this->balance -= $this->amount;

    }

    public function render(): View
    {
        return view('livewire.modify-balance');
    }

    public function submit()
    {
        $user = User::query()
            ->where('id', $this->user_id)
            ->update(['balance' => $this->balance]);

        $this->reset('amount');

        session()->flash('status', __('Balance updated successfully'));
    }
}
