<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Login extends Component
{
    public $email, $password;
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string|min:6|max:10',
        
    ];
    public function submit()
    {
        
        // $this->validate();
        if (Auth::attempt($this->validate())) {
            // Authentication was successful
            session()->flash('message', 'login successfully');
            return redirect()->intended('/');
        } else {
            // Authentication failed
            $this->addError('email', 'Invalid email or password.');
            // session()->flash('message', 'Invalid email or password.');
        }
        
        sleep(3);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.login');
    }
}
