<?php

namespace App\Models;

use App\models\Bp;
use App\models\fps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kfs extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function Bp(){
    //     return $this->belongsToMany(Bp::class, 'fps');
    // }
    // public function Bp(){
    //     return $this->belongsTo(Bp::class,'id_bp','id');
    // }
}
