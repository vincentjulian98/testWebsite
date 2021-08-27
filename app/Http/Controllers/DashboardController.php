<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balance;

class DashboardController extends Controller
{
    public function index()
    {
        $balances = Balance::get()->where('verified','0');
        $sum = Balance::get()->where('verified','1')->sum('value');
        $group = Balance::get()->where('verified','1')->where('value','>=',0);
        $group2 = Balance::get()->where('verified','1')->where('value','<=',0);
        return view('dashboard', [
            'balances' => $balances,
            'sum' =>$sum,
            'groups' => $group,
            'groups2' => $group2,
        ]);
    }
}
