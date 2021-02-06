<?php

namespace App\Models;

use App\Models\Compte;
use App\Models\Person;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compte extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function person(){
    	return $this->belongsTo(Person::class);
    }
}
