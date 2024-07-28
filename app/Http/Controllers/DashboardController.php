<?php

namespace App\Http\Controllers;

use App\Models\DataControl\dataApprove;
use App\Models\Kendaraan\kendaraan;
use App\Models\Pegawai\pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $getData = dataApprove::orderBy('status', 'asc')->get();
        $countPegawai = pegawai::count();
        $getDataKendaraan = kendaraan::pluck('nama_kendaraan')->unique();

        // Kendaraan Masuk Masa Service
        $findKendaraanService = kendaraan::where('service_berikutnya', '<=', Carbon::now()->addMonth(1))
            ->orderBy('service_berikutnya', 'asc')
            ->get();

        for ($i = 0; $i < count($findKendaraanService); $i++) {
            $getKendaraanService[$i]['nama'] = $findKendaraanService[$i]->nama_kendaraan;
            $getKendaraanService[$i]['jenis_kendaraan'] = $findKendaraanService[$i]->jenis_kendaraan;
            $getKendaraanService[$i]['plat_nomor'] = $findKendaraanService[$i]->plat_nomor;
            $getKendaraanService[$i]['service_berikutnya'] = Carbon::parse($findKendaraanService[$i]->service_berikutnya)->diffForHumans();
        }

        // Jumlah Pemakaian Kendaraan
        $getKendaraan = [];
        foreach ($getDataKendaraan as $key => $value) {
            $getKendaraan[$key]['nama'] = $value;
            $getKendaraan[$key]['jenis_kendaraan'] = kendaraan::where('nama_kendaraan', $value)->first()->jenis_kendaraan;
            $getKendaraan[$key]['jumlah'] = kendaraan::where('nama_kendaraan', $value)->count();
        }
        $getKendaraan = array_values($getKendaraan);

        // Jumlah Approve
        for ($i = 1; $i <= 12; $i++) {
            $approve1[$i] = dataApprove::where('approve_1', 1)->whereYear('approve_1_at', date('Y'))->whereMonth('approve_1_at', $i)->count();
            $approve2[$i] = dataApprove::where('approve_2', 1)->whereYear('approve_2_at', date('Y'))->whereMonth('approve_2_at', $i)->count();
        }
        $getValuesApprove1 = array_values($approve1);
        $getValuesApprove2 = array_values($approve2);

        return view('components.Dashboard', compact('countPegawai', 'getValuesApprove1', 'getValuesApprove2', 'getData', 'getKendaraan', 'getKendaraanService'));
    }
}
