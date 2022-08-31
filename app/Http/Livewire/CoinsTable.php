<?php

namespace App\Http\Livewire;

use App\Services\CoinGecko\CoinGeckoService;
use App\Traits\Coin\RedirectToCoin;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CoinsTable extends Component
{
    use RedirectToCoin;

    public string $search = '';
    public string $sortField = 'market_cap_rank';
    public bool $sortDescending = false;

    public function setSortedField(string $field): void
    {
        if ($field === $this->sortField) {
            $this->sortDescending = !$this->sortDescending;
        } else {
            $this->sortField = $field;
            $this->reset('sortDescending');
        }
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.coins-table', [
            'coins' => collect(CoinGeckoService::getCoinsMarkets())
                ->filter(fn($item) => stripos($item['name'], $this->search) !== false)
                ->sortBy($this->sortField, SORT_REGULAR, $this->sortDescending)
                ->toArray()
        ]);
    }
}
