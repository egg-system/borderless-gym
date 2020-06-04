<?php

namespace App\Http\Clients;

use Illuminate\Support\Facades\Http;

/**
 * HeartRails Express: http://express.heartrails.com/api.html
 */
class HeartRailsExpressClient
{
    const BASE_URL = 'http://express.heartrails.com/api/json';

    public function __construct()
    {
        //
    }

    private function getStationsByLine(string $line)
    {
        $query = [
          'method' => 'getStations',
          'line' => $line
        ];
        return Http::get(self::BASE_URL, $query);
    }

    /**
     * JR山手線の駅を取得
     */
    public function getYamanoteLineStations()
    {
        return $this->getStationsByLine('JR山手線');
    }
}
