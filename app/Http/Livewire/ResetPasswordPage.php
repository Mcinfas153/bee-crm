<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ResetPasswordPage extends Component
{

    public $code;
 
    public function mount($code)
    {
        $this->code = $code;
    }

    public function render()
    {
        //verify code & time & done
        $currentRequest =  DB::table('user_password_reset')->where('code', $this->code)->first();

        if($currentRequest){

            $addedTime = new Carbon($currentRequest->created_at);

            $currentTime = new Carbon();

            //if available return view
            
            if($currentTime->diffInMinutes($addedTime) < 30){
                
                return view('livewire.reset-password-page')->layout('layouts.guest', [
                    'title' => 'Reset Password'
                ]);

            } else {

                abort(404);

            }
           
        } else {

            abort(404);

        }
    }
}
