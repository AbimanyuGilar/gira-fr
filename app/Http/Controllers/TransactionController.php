<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $allTransactions = $user->transactions;

        $year = $request->year ? $request->year : date('Y');
        $month = $request->month ? $request->month : date('m');
        $day = $request->day ? $request->day : date('d');

        $filteredTransactions = $user->transactions()->whereYear('transaction_date', $year)->whereMonth('transaction_date', $month)->whereDay('transaction_date', $day)->orderBy('id', 'desc')->get();

        $selectedTransaction = $filteredTransactions->firstWhere('id', $request->selected);

        return view('transactions', compact('user', 'allTransactions', 'filteredTransactions', 'selectedTransaction', 'year', 'month', 'day'));
        return($selectedTransaction);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();

        return view('transactions-create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
