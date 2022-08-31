<?php

namespace App\Http\Livewire;

use App\Services\CoinGecko\CoinGeckoService;
use App\Traits\Coin\RedirectToCoin;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class TopCoinsCards extends Component
{
    use RedirectToCoin;

    public function render(): Factory|View|Application
    {
        return view('livewire.top-coins-cards', [
            'coins' => CoinGeckoService::getCoinsMarkets(4)
        ]);
    }
}
