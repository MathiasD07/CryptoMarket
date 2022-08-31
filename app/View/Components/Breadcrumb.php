<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public function __construct(
        public string $coinName
    )
    {
        //
    }

    public function render(): View|Factory|Application
    {
        return view('components.breadcrumb');
    }
}
