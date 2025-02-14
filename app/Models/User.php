<?php

namespace App\Models;

use App\Models\Compte;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_name',
        'role',
        'compte_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function compte(){
        return $this->belongsTo(Compte::class,'compte_id','id');
    }
    //CHECKING IF THE USER IS ADMIN

    //['DEFAULT', 'ADMINISTRATEUR','SECRETAIRE', 'COMPTABLE']

    public function isAdmin(){
        return $this->role == 'ADMINISTRATEUR';
    }

    public function isSecretaire(){
        return $this->role == 'SECRETAIRE';
    }

    public function isComptable(){
        return $this->role == 'COMPTABLE';
    }

    public function isDefault(){
        return $this->role == 'DEFAULT';
    }

     public function isMembre(){
        return $this->role == 'MEMBRE';
    }
}
