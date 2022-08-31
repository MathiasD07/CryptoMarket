<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableHeader extends Component
{
    public function __construct(
        public string $name,
        public bool $descending,
        public string $currentSortedField
    )
    {
        //
    }

    public function render(): View|Factory|Application
    {
        return view('components.table-header', [
            'showArrow' => $this->name === $this->currentSortedField
        ]);
    }
}
