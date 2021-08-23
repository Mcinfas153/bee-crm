<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InvoiceListPage extends Component
{
    public function render()
    {
        $invoices = Auth::user()->invoices();
        return view('livewire.invoice-list-page', compact('invoices'))->layout('layouts.app', [
            'title' => 'Invoices'
        ]);
    }
}
