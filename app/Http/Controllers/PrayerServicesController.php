<?php

namespace App\Http\Controllers;

use App\Services\PrayerTimeService;
use Illuminate\Http\Request;

class PrayerServicesController extends Controller
{
    protected $PrayerTimeService;

    public function __construct(PrayerTimeService $PrayerTimeService)
    {
        $this->PrayerTimeService = $PrayerTimeService;
    }

    public function index($location, $date)
    {
        $cityId = $this->PrayerTimeService->getCityId($location);
        if (!$cityId){
            return response()->json(['eror' => 'City not Found'], 404);
        }

        $PrayerTimes = $this->PrayerTimeService->getPrayerTimes($cityId, $date);

        return response()->json($PrayerTimes);
    }
}
