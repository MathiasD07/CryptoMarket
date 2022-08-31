<th wire:click="setSortedField('{{ $name }}')" class="hover:cursor-pointer bg-slate-300 px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">
    <div class="flex items-center">
        {{ $slot }}
        @if($showArrow)
            @if($descending)
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                </svg>
            @endif
        @endif
    </div>
</th>
