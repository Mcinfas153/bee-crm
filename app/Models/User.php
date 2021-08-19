<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Lead;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function members()
    {
        return $this->HasMany(User::class,'created_by');
    }

    public function creator()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function leads()
    {
        return $this->hasMany(Lead::class,'created_by');
    }

    public function assignLeads()
    {
        return $this->hasMany(Lead::class,'assign_to');
    }

    public function userType()
    {
        return $this->belongsTo(Utype::class,'utype');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
