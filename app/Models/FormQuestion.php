<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormQuestion extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Form(){
        return $this->belongsTo(Form::class,'formID');
    }

    public function Answers(){
        return $this->hasMany(FormAnswer::class,'questionID');
    }

    public function Options(){
        return $this->hasMany(FormOption::class,'questionID');
    }
}
