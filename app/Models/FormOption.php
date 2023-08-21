<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormOption extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Question(){
        return $this->belongsTo(FormQuestion::class,'questionID');
    }
}
