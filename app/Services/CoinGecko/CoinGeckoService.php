<?php

namespace App\Services\CoinGecko;

use Illuminate\Support\Facades\Http;

class CoinGeckoService
{
    private const BASE_URL = 'https://api.coingecko.com/api/v3';

    public static function getCoinsMarkets(int $limit = 100): array
    {
        $response = Http::get(self::BASE_URL . '/coins/markets', [
            'vs_currency' => 'eur',
            'order' => 'market_cap_desc',
            'per_page' => $limit
        ]);

        return $response->successful() ? $response->json() : [];
    }

    public static function getCoin(string $id): array
    {
        $response = Http::get(self::BASE_URL . '/coins/' . $id);

        if ($response->failed()) {
            abort(404);
        }

        return $response->json();
    }
}
