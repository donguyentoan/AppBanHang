<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 1,
        ]);

         // Gắn kết đối tượng Role với user

        $user->save();
        $this->createWallet($user);



        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    }

    public function createWallet($user = null)
    {
        if($user == null)
        {
            $user = session('user');
        }


        $walletTmp = Wallet::where('user_id', '=', $user->id)->get();
        //dd($walletTmp->count());
        if ($walletTmp->count() <= 0) {
            $wallet = new Wallet();

            $wallet->user_id = $user->id;
            $wallet->address = Str::random(10);
            $wallet->name = "wallet " . $user->id;
            $wallet->balance = 0;
            $wallet->save();
            return redirect('/topup')->with('success', 'Create Wallet successfully');
        } else {
            return redirect('/topup')->with('success', '  Wallet is exit ');

        }
//


    }
}
