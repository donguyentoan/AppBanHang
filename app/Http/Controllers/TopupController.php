<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\WalletTransaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TopupController extends Controller
{


    public function index()
    {
        $user = session('user');
        $wallet = Wallet::where('user_id', '=', $user->id)->first();
        $walletTransaction = [];
        if (!empty($wallet->id)) {
            $walletTransaction = WalletTransaction::where('wallet_id', '=', $wallet->id)->get();

        }


        return view('Topup', ['wallet' => $wallet, 'walletTransaction' => $walletTransaction]);
    }





    public function wallet_transaction(Request $request)
    {
        $user = session('user');

        $walletTmp = Wallet::where('user_id', '=', $user->id)->first();

        $balance = $request->input('balance');

        $walletTraction = new WalletTransaction();
        $walletTraction->wallet_id = $walletTmp->id;
        $walletTraction->action = WalletTransaction::$ACTION_INCREASE;
        $walletTraction->type = WalletTransaction::$TYPE_CHANGE;
        $walletTraction->message = "Đã nạp :  " . $balance . "  vào ví";
        $walletTraction->transaction_id = Str::random(10);
        $walletTraction->balance = $balance;
        $walletTraction->save();


        $walletTmp->balance += $balance;
        $walletTmp->save();


        return redirect('/topup')->with('success', ' Wallet Transaction successfully');

    }


    public function wallet_transaction_withdraw(Request $request)
    {
        $user = session('user');

        $walletTmp = Wallet::where('user_id', '=', $user->id)->first();

        $balance = $request->input('balance');

        $walletTraction = new WalletTransaction();
        $walletTraction->wallet_id = $walletTmp->id;
        $walletTraction->action = WalletTransaction::$ACTION_DECREASE;
        $walletTraction->type = WalletTransaction::$TYPE_CHANGE;
        $walletTraction->message = "Đã rut :  " . $balance . "  ra khỏi ví";
        $walletTraction->transaction_id = Str::random(10);
        $walletTraction->balance = $balance;
        $walletTraction->save();


        $walletTmp->balance -= $balance;
        $walletTmp->save();


        return redirect('/topup')->with('success', ' Wallet Transaction successfully');

    }
}
