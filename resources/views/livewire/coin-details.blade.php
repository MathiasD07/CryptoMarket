<div>
    <x-breadcrumb :coinName="$coin['name']" />

    <div class="flex items-start flex-wrap gap-20">
        <div>
            <div class="flex items-center">
                <img class="mr-5 mb-5 mt-5 w-14 h-14" src="{{ $coin['image']['large'] }}" alt="{{ $coin['name'] }}">
                <p class="text-4xl text-gray-900 font-extrabold">{{ $coin['name'] }}</p>
                <span class="bg-slate-300 text-slate-800 text-sm font-medium ml-3 mr-3 px-2.5 py-0.5 rounded min-w-fit">{{ strtoupper($coin['symbol']) }}</span>
            </div>
            <div class="flex items-center flex-wrap gap-2">
                <span class="bg-slate-500 text-gray-100 text-xs font-semibold px-2.5 py-0.5 rounded min-w-fit">Rang #{{ $coin['market_cap_rank'] }}</span>
                @isset($coin['hashing_algorithm'])
                    <span class="bg-slate-300 text-slate-800 text-xs font-semibold px-2.5 py-0.5 rounded min-w-fit">{{ $coin['hashing_algorithm'] }}</span>
                @endisset
                @foreach(array_slice($coin['categories'], 0, 3) as $category)
                    <span class="bg-slate-300 text-slate-800 text-xs font-semibold px-2.5 py-0.5 rounded min-w-fit">{{ $category }}</span>
                @endforeach
            </div>
        </div>
        <div class="min-w-fit mt-3">
            <p class="text-slate-700 text-xs font-normal mb-2">Prix en euro pour {{ $coin['name'] }} ({{ strtoupper($coin['symbol']) }})</p>
            <p class="text-4xl text-gray-900 font-extrabold">{{ rtrim(rtrim(number_format($coin['market_data']['current_price']['eur'], 10, ',', ' '), "0"), ',') }} €</p>

            <hr class="my-5"/>

            <div class="flex items-center gap-5">
                <div class="pr-5 border-r">
                    <p class="text-slate-700 text-xs font-normal mb-2">Cap. Marché</p>
                    <p class="text-slate-700 text-sm font-extrabold">{{ number_format($coin['market_data']['market_cap']['eur'], 0, ',', ' ') }} €</p>
                </div>

                <div>
                    <p class="text-slate-700 text-xs font-normal mb-2">Volume (24h)</p>
                    <p class="text-slate-700 text-sm font-extrabold">{{ number_format($coin['market_data']['total_volume']['eur'], 0, ',', ' ') }} €</p>
                </div>
            </div>
        </div>

        <div class=" w-full max-w-md rounded-lg mt-3">
            <h5 class="text-xl font-bold leading-none text-gray-900">Autres devises</h5>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate">
                                    Dollar Américain
                                </p>
                                <p class="text-sm text-gray-500 truncate">
                                    USD
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                {{ rtrim(rtrim(number_format($coin['market_data']['current_price']['usd'], 10, ',', ' '), "0"), ',') }} $
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.121 7.629A3 3 0 009.017 9.43c-.023.212-.002.425.028.636l.506 3.541a4.5 4.5 0 01-.43 2.65L9 16.5l1.539-.513a2.25 2.25 0 011.422 0l.655.218a2.25 2.25 0 001.718-.122L15 15.75M8.25 12H12m9 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate">
                                    Livre Sterling
                                </p>
                                <p class="text-sm text-gray-500 truncate">
                                    GBP
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                {{ rtrim(rtrim(number_format($coin['market_data']['current_price']['gbp'], 10, ',', ' '), "0"), ',') }} £
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="my-10">
        <p class="text-2xl font-bold mb-2">Description</p>
        <p class="text-slate-700 text-base font-normal">
            @if($coin['description']['en'] !== "")
                {!! $coin['description']['en'] !!}
            @else
                Pas de description...
            @endif
        </p>
    </div>
</div>
