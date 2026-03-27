<?php

namespace App\Livewire\Auth;

use Livewire\Component;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Login extends Component
{
    
    public $email, $password;

    public function submit(Request $request){
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return back()->with('fail','Invalid Credentials');
        }
    }

    public function render(){
        return view('livewire.auth.login')
            ->layout('components.layouts.auth.user');
    }
}
