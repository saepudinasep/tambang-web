<?php

namespace App\Models\DataControl;

use App\Models\Kendaraan\driver;
use App\Models\Kendaraan\kendaraan;
use App\Models\Pegawai\pegawai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dataApprove extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $guarded = [];

    public function kendaraan()
    {
        return $this->belongsTo(kendaraan::class, 'id_kendaraan', 'id');
    }

    public function driver()
    {
        return $this->belongsTo(driver::class, 'id_driver', 'id');
    }

    public function pegawai()
    {
        return $this->belongsTo(pegawai::class, 'id_pegawai', 'id_pegawai');
    }

    public function tujuan()
    {
        return $this->belongsTo(tambang::class, 'tujuan_tambang', 'id');
    }
}
