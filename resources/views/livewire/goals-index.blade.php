<div>
    <div class="flex justify-end p-2 pb-4">
        <x-button wire:click="$dispatch('openModal', { component: 'goal-create-modal' })" wire:loading.attr="disabled">
            New goal
        </x-button>
    </div>
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($goals as $goal)
            <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow" wire:key="{{ $goal->id }}">
                <div class="flex w-full items-center justify-between space-x-6 p-6">
                    <div class="flex-1 truncate">
                        <div class="flex items-center space-x-3">
                            <h3 class="truncate text-sm font-medium text-gray-900">{{ $goal->name }}</h3>
                        </div>
                        <p class="mt-1 truncate text-sm text-gray-500">Started on {{ $goal->readableDate() }}</p>
                    </div>
                    <a href="{{ route('goals.show', $goal) }}" class="text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                        <div class="flex w-0 flex-1">
                            <a href="{{ route('goals.show', $goal) }}" class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary-dark">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                                </svg>
                                New progress report
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
