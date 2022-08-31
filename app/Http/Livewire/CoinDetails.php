<?php

namespace App\Http\Livewire;

use App\Services\CoinGecko\CoinGeckoService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CoinDetails extends Component
{
    public array $coin = [];

    public function mount(string $id): void
    {
        $this->coin = CoinGeckoService::getCoin($id);
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.coin-details');
    }
}
