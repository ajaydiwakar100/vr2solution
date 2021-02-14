<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quize extends Model
{
    use HasFactory;
    protected $table = "quize";    
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'question', 
        'option_a', 
        'option_b', 
        'option_c', 
        'option_d',
        'answer',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}


