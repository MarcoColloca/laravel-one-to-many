<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    public function type(){
        // Non serve importare Type, in quanto se non importato viene cercato nello stesso namespace dove si trova, e in questo caso Project ha lo stesso namepasce di Project
        return $this->belongsTo(Type::class);
    }


    protected $fillable = ['name', 'link', 'slug', 'link', 'description', 'date_of_creation', 'is_public', 'contributors', 'contributors_link', 'type_id'];
}
