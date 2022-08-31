<div class="sm:-mx-8 px-4 sm:px-8 py-4 overflow-auto">
    <form class="mb-3">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Rechercher</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input wire:model.debounce.500ms="search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-slate-500 focus:border-slate-500" placeholder="Rechercher une crypto">
        </div>
    </form>

    <div class="inline-block min-w-full rounded-lg max-h-screen overflow-auto">
        <table class="min-w-full leading-normal">
            <thead class="sticky top-0">
                <tr>
                    <x-table-header name="market_cap_rank" :descending="$sortDescending" :currentSortedField="$sortField">Rang</x-table-header>
                    <x-table-header name="name" :descending="$sortDescending" :currentSortedField="$sortField">Nom</x-table-header>
                    <x-table-header name="current_price" :descending="$sortDescending" :currentSortedField="$sortField">Prix</x-table-header>
                    <x-table-header name="market_cap" :descending="$sortDescending" :currentSortedField="$sortField">Cap. Marché</x-table-header>
                    <x-table-header name="total_volume" :descending="$sortDescending" :currentSortedField="$sortField">Volume (24h)</x-table-header>
                </tr>
            </thead>
            <tbody>
                @foreach($coins as $coin)
                    <tr wire:click="redirectToDetails('{{ $coin['id'] }}')" class="bg-slate-200 hover:bg-slate-300 hover:cursor-pointer">
                        <td class=" px-5 py-5 border-b border-gray-200 text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">#{{ $coin['market_cap_rank'] }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    <img class="w-full h-full" src="{{ $coin['image'] }}" alt="{{ $coin['name'] }}"/>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $coin['name'] }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ rtrim(rtrim(number_format($coin['current_price'], 10, ',', ' '), "0"), ',') }} €</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ number_format($coin['market_cap'], 0, ',', ' ') }} €</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ number_format($coin['total_volume'], 0, ',', ' ') }} €</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
