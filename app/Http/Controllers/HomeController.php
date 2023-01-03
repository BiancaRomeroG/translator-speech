<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {
        $user = Auth::user();
        $planBasic = Plan::where('name', 'basic')->first();
        $planStandard = Plan::where('name', 'standard')->first();
        $planPremium = Plan::where('name', 'premium')->first();

        return view('dashboard', compact(
            'planBasic',
            'planStandard',
            'planPremium',
            'user'
        ));
    }

    public function traducir_texto(){
        $user = Auth::user();
         return view('traducir.texto',compact('user'));
     }

}
