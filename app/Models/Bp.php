<?php

namespace App\Models;

use App\models\fps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bp extends Model
{
    use HasFactory;
    protected $guarded = [];
    

    // public function Kfs(){
    //     return $this->belongsToMany(Kfs::class, 'fps','id_bp');
    // }
   
}
