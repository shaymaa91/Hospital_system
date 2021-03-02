<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'specialist';
    protected $fillable = [
        'name',
        
        'username',
       'degree',
        'email',
       'DOB',
        'image',
        'gender',
        'charge',
        'status',
        'biography',
        'department_id',
       ' specialist_id',
       'country_id',
    ];
    function departments(){
        return $this->belongsTo(departments::class);
    }
    function specialist(){
        return $this->belongsTo(specialist::class);
    }
}
