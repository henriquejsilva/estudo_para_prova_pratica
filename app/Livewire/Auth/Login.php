<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    protected $messages = [
        'email.required' => 'O email é obrigatório',
        'email.email' => 'O formato do email está inválido',
        'password.required' =>  'A senha é obrigatória',
        'password.min' => 'A senha deve conter no minimo 6 caracteres'
    ];

    public function login()
    {
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            
            session()->regenerate();

        }

        session()->flash('error', 'E-mail e senha incorretors');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
