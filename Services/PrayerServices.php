<?php

namespace App\Services;
use Guzzlehttp\Client;

class PrayerService{
    
    protected $client;


    public  function __construct(Client $client)
    {
        $this->client = $client;
    }


    public function getName($cityName)
{
    $response = $this->client->get($this->baseUrl."/cari/{$cityName}");
    $data = json_decode($response->getBody()->getContents(),true);

    if ($data['status'] && !empty($data['data'])) {
        return $data['data']['data']['data'];
    }

    return null;
}

public function getId($cityId, $date){
    $response = $this->client->get("https://api.praktek.com/v2/negara/provinsi/{$cityid}/{$date}");
    return json_decode($response->getBody()->getContents(),true);
}

}



