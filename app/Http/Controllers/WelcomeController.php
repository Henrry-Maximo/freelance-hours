<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::find(1);
        // $user = User::query()->create([
        //     "name"=> 'Rafael',
        //     'email'=> 'rafael@email.com',
        //     'password' => bcrypt('@123456'),
        // ]);

        // var_dump($user);
        // dump($user);
        // die();
        // dd($user);

        // Options 1 and 2
        $user->email_verified_at = now();
        $user->save();

        $user->update(['email_verified_at' => now()]);

        dd($user->email_verified_at);
        

        return view('teste.jeremias');
    }
}
