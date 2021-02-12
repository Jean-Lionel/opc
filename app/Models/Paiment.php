<?php

namespace App\Models;

use App\Models\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded =[];

    public static function boot(){
    	parent::boot();

    	self::creating(function($model){
    		$model->user_id = Auth::user()->id ?? 0;

    	});
    }

    public function person(){
    	return $this->belongsTo(Person::class);
    }
}
