<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Signup extends Component
{
    public $email, $password,$name, $password_confirmation;
    protected $rules = [
        'name' => 'required|string|min:6|max:100',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|max:10|confirmed',
        
    ];
    public function submit()
    {
        
        $this->validate();
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();
        session()->flash('message', 'signup successfully');
        sleep(3);
        $this->reset();
        return redirect()->to('/login');
    }
    public function render()
    {
        return view('livewire.signup');
    }
}
