<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class OrderController extends Controller
{
    public function getUserOrders(Request $request) {

       
        $username = trim(strtolower($request->input('username'))); 
        $user = User::where('name', $username)->first();

        if(!$user) {
            return "No user found!";
        } else {
            $orders = $user->orders->toArray();
        }
        return redirect('/')->with([
            'user' => $user->toArray(), 
            'orders' => $orders
        ]);
    }
}
