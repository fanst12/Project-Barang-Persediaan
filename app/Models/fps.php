<?php

namespace App\Models;

use App\models\Kfs;
use App\models\Bp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fps extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Kfs(){
        return $this->belongsTo(Kfs::class,'id_kf','id_kf');
    }
    
    public function Bp(){
        return $this->belongsTo(Bp::class,'id_bp','id');
    }

}
