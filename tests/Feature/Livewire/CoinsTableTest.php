<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\CoinsTable;
use Livewire\Livewire;
use Tests\TestCase;

class CoinsTableTest extends TestCase
{
    public function the_component_can_render(): void
    {
        $component = Livewire::test(CoinsTable::class);

        $component->assertStatus(200);
    }

    public function test_sort_descending_toggle_on_same_sorted_field(): void
    {
        $coinsTable = Livewire::test(CoinsTable::class);

        $this->assertEquals('market_cap_rank', $coinsTable->get('sortField'));
        $this->assertFalse($coinsTable->get('sortDescending'));

        $coinsTable->call('setSortedField','market_cap_rank');

        $this->assertEquals('market_cap_rank', $coinsTable->get('sortField'));
        $this->assertTrue($coinsTable->get('sortDescending'));
    }

    public function test_change_sorted_field(): void
    {
        $coinsTable = Livewire::test(CoinsTable::class);

        $this->assertEquals('market_cap_rank', $coinsTable->get('sortField'));
        $this->assertFalse($coinsTable->get('sortDescending'));

        $coinsTable->call('setSortedField','current_price');

        $this->assertEquals('current_price', $coinsTable->get('sortField'));
        $this->assertfalse($coinsTable->get('sortDescending'));
    }

    public function test_homepage_contains_livewire_coins_table_component(): void
    {
        $this->get('/')->assertSeeLivewire(CoinsTable::class);
    }
}
