<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balance;

class BalanceController extends Controller
{
    public function index()
    {
        $balances = Balance::where('verified','0');
        $balances2 = Balance::where('verified','1');
        return view('balances.index', [
            'balances' => $balances,
            'balances2' => $balances2,
        ]);
    }
    public function pemasukan()
    {
        return view('balances.pemasukan');
    }
    public function pengeluaran()
    {
        return view('balances.pengeluaran');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'value' => 'required',
            'category' => 'required',
            'description' => 'nullable',
        ]);

        Balance::create([
            'value' => $request->value,
            'category' => $request->category,
            'description' => $request->desc,
        ]);

        return back();
    }
    public function update(Balance $balance)
    {

        Balance::where('id', $balance->id)->update(['verified' => 1]);

        return back();
    }
    public function destroy(Balance $balance)
    {
        $this->authorize('delete',$balance);

        $balance->delete();

        return back();
    }
}
