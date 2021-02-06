<?php

namespace App\Models;

use App\Models\Compte;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];


    public function compte(){
    	return $this->belongsTo(Compte::class,'id','person_id');
    }

    public function getFullNameAttribute(){
    	return $this->first_name . ' ' . $this->last_name;
    }


}
