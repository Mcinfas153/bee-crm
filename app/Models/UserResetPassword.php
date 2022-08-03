<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResetPassword extends Model
{
    use HasFactory;

    protected $table = 'user_password_reset';
}
