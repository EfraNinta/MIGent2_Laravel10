<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    //use HasFactory;
    use SoftDeletes;
    //deklarasi tabel
    public $table = 'consultation';
    //tipe data harus yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function appointment() {
        return $this->hasMany('App\Models\Operational\Appointment', 'consultation_id');
    }
}
