<?php

namespace App\Models;

use App\Models\Compte;
use App\Models\Paiment;
use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compte extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function person(){
    	return $this->belongsTo(Person::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'id','compte_id');
    }

    
}
