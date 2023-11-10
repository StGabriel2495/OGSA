<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ContractController extends Controller
{
    public function contract() {
        return Inertia::render('Contracts/Contract');
    }

    public function contracts() {
        return Inertia::render('Contracts/Contracts');
    }

    public function contract_view() {
        return Inertia::render('Contracts/Contract_view');
    }
}
