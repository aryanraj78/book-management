<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;


class CartCounter extends Component
{
    protected $listeners = ['updateCart' => 'render'];
    public function render()
    {
        $user_id = null;
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
        }
        return view('livewire.cart-counter',['CartAmount' => Cart::where('user_id',$user_id)->count(),]);
    }
}
