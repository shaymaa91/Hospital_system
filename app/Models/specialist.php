<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialist extends Model
{
    use HasFactory;
    protected $table = 'specialist';

    protected $fillable=[
        'name',
        
    ];
    function doctors(){
        return $this->hasMany(doctors::class);
    }
}