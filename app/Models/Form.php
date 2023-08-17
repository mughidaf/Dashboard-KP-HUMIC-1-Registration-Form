<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Questions(){
        return $this->hasMany(FormQuestion::class,'formID');
    }

    public function Answers(){
        return $this->hasMany(FormAnswer::class,'formID');
    }
    
    public function Submissions(){
        return $this->hasMany(Submission::class,'formID');
    }
}
