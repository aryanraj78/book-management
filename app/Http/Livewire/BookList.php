<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use App\Models\Cart;

class BookList extends Component
{
    public $book_list;
    public $genre_list;
    public $genre;

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
    public function render()
    {
        $query = Book::whereNotNull('id');
        if($this->genre)
        {
            $query->where('genre',$this->genre);
        }
        $this->book_list = $query->get();
        $this->genre_list = Book::pluck('genre')->unique();
        return view('livewire.book-list');
    }
}
