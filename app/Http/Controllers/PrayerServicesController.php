<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrayerServicesController extends Controller
{
    protected function __construct(PrayerServices $PrayerServices)
    {
        $this->PrayerServices = $PrayerServices;
    }

    public function index($location, $date)
{
    // dapatkan id kota berdasarkan lokasi
    $cityId = $this->PrayerServices->getCityId($location);
    if (!$cityId) {
        return response()->json(['eror'=>'City not Found', 404]);
    }

    //dapatkan jadwal sholat berdasarkan id kota dan tanggal
    $PrayerServices = $this->PrayerServices->getPrayerTimes($cityId, $date);


    return response()->json($PrayerServices);
}

}

