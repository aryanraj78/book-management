<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;



class CartDetail extends Component
{
    public $cart_items;

    public function removeFromCart($cart_id)
    {
        Cart::where('id',$cart_id)->delete();
        $this->emit('updateCart');

    }
    public function render()
    {
        $user_id = null;
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
        }
        $this->cart_items = Cart::with('book','user')->where('user_id',$user_id)->get();
        
        return view('livewire.cart-detail');
    }
}
