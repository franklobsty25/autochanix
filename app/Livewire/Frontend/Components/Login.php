<?php

namespace App\Livewire\Frontend\Components;

use App\Models\User;
use App\RoleEnum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    public $isRegister = false;
    public $name;

    #[Validate('required|string')]
    public $email;

    #[Validate('required|string')]
    public $password;

    public $rememberMe = false;

    public function register()
    {
        $this->validate();

        try {
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            $user->assignRole(RoleEnum::User);

            $this->reset();

            session()->flash('success', 'Registration Successful');
        } catch (\Exception $e) {
            $this->redirectRoute('home');
            session()->flash('error', $e->getMessage());
        }
    }

    public function login ()
    {
        $this->validate();

        try {
            $isValid = Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->rememberMe);
            if ($isValid) {
                $this->redirectRoute('shopping-cart');
            }
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.frontend.components.login');
    }
}
