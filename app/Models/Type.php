<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;


    public function projects(){
        // Non serve importare Project, in quanto se non importato viene cercato nello stesso namespace dove si trova, e in questo caso Project ha lo stesso namepasce di Project
        return $this->hasMany(Project::class);
    }

}
