<?php

namespace App\Http\Livewire;

use App\Mail\ResetPassword;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Throwable;
use RealRashid\SweetAlert\Facades\Alert;


class ForgotPassword extends Component
{

    public $email;
    public $msg = '';

    protected $rules = [
        'email' => 'required|email',
    ];

    public function render()
    {
        return view('livewire.forgot-password')->layout('layouts.guest', [
            'title' => 'Forget Password?'
        ]);;
    }

    public function forgotPassword()
    {
        $this->validate();

        if(DB::table('users')->where('email', $this->email)->count() === 1){

           $urlCode = Str::random(40);

           $forgotPasswordUrl = URL::to('/forgot-password').'/'.$urlCode;

           try{

                Mail::to($this->email)->send(new ResetPassword($forgotPasswordUrl));

                $this->msg =  config('msg.13');

           } catch (Throwable $er) {

                $this->addError('email', config('msg.100'));

           }

        } else{

            $this->addError('email', config('msg.12'));

        }
    }
}
