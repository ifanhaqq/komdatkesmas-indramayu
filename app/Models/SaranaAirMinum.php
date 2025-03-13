<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class SaranaAirMinum extends Model
{
    use HasFactory;
    
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected $fillable = [
        'kecamatan', 'puskesmas', 'jumlah_desa_kelurahan', 'jumlah_sarana_air_minum', 'jumlah_sarana_air_aman', 'jumlah_persentase'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid(); // Generate UUID otomatis
        });
    }
}
