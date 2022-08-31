<div class="flex flex-row content-evenly items-center justify-between overflow-x-auto gap-3">
    @foreach($coins as $coin)
        <div class="w-full max-w-xs rounded-lg mt-3" style="min-width: 170px">
            <div class="flex flex-col items-center pb-10">
                <img class="m-5 w-24 h-24" src="{{ $coin['image'] }}" alt="{{ $coin['name'] }}">
                <span class="text-sm text-gray-900">#{{ $coin['market_cap_rank'] }}</span>
                <h5 class="mb-1 text-xl font-medium text-gray-900">{{ $coin['name'] }}</h5>
                <span class="text-sm text-gray-600">{{ rtrim(rtrim(number_format($coin['current_price'], 10, ',', ' '), '0'), ',') }} €</span>
                <div class="mt-4 space-x-3 md:mt-6">
                    <button wire:click="redirectToDetails('{{ $coin['id'] }}')" class="py-2 px-4 text-sm font-medium text-center text-white bg-slate-600 rounded-lg hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-blue-300">Plus d'infos</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
