<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name = "";
    public $email = "";
    public $password = "";
    public $password_confirmation = "";

    public function register()
    {
        $credentials = $this->validate([
            "name" => "required",
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
            'password_confirmation' => 'required'
        ]);

        if ($this->password !== $this->password_confirmation) {
            $this->addError('password_confirmation', 'Password confirmation does not match.');
            return;
        }

        $user = User::create($credentials);

        Auth::login($user);

        return redirect('/task');
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
