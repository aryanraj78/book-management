<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Book;

class UserDashboard extends Component
{
    public $book_list;
    public function render()
    {
        $book_ids = Cart::where('user_id',auth()->user()->id)->pluck('book_id');
        $genre_list = Book::whereIn('id',$book_ids)->pluck('genre');
        $this->book_list = Book::whereIn('genre',$genre_list)->whereNotIn('id',$book_ids)->get();
        // dd($this->book_list);
        return view('livewire.user-dashboard');
    }

    public function addToCart($book_id)
    {
       
        $user = auth()->user();
        
        if ($user) {
                $book = Book::where('id',$book_id)->where('quantity','>',0)->first();
            if($book)
            {
                $cart =  Cart::where('user_id',$user->id)->where('book_id',$book_id)->first();
                if($cart)
                {
                    $quantity = $cart->quantity + 1;
                    $cart->quantity = $quantity;
                    $cart->price = $cart->price*$quantity;
                    $cart->update() ;
                    
                    session()->flash('message', 'Added! Thank you.');

                }else{
                    $cart = new Cart;
                    $cart->user_id = $user->id;
                    $cart->book_id = $book_id;
                    $cart->quantity = 1;
                    $cart->price = $book->price;
                    $cart->save() ;
                    $this->emit('updateCart');

                    session()->flash('message', 'Added! Thank you.');

                }
            }else{
                session()->flash('message', 'Book is out of stock.');

            }
        } else {
            return redirect()->to('/login');
        }
    }
}
