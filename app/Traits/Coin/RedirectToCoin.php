<?php

namespace App\Traits\Coin;

trait RedirectToCoin
{
    public function redirectToDetails(string $id)
    {
        return redirect()->to('/coins/' . $id);
    }
}
