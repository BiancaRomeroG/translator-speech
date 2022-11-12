<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $planBasic = Plan::where('name', 'basic')->first();
        $planStandard = Plan::where('name', 'standard')->first();
        $planPremium = Plan::where('name', 'premium')->first();

        return view('dashboard', compact(
            'planBasic',
            'planStandard',
            'planPremium',
        ));
    }
}
