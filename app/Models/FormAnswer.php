<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormAnswer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Form(){
        return $this->belongsTo(Form::class,'formID');
    }

    public function Question(){
        return $this->belongsTo(FormQuestion::class,'questionID');
    }

    public function Submission(){
        return $this->belongsTo(Submission::class,'subID');
    }
}
