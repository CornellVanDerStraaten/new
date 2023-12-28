<div class="mr-1">
    <div class="flex justify-between mb-4 mt-1">
        <h1 class="text-3xl font-bold">{{ $goal->name }}</h1>
        <div class="flex gap-3">
            <a href="{{route('goals.questions', $goal)}}" class="flex">
                <x-button class="bg-secondary hover:bg-secondary-dark focus:bg-secondary-dark float-right" wire:loading.attr="disabled">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>
                    Edit Future Reports
                </x-button>
            </a>
            <x-button class="bg-primary float-right" wire:loading.attr="disabled">
                <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                </svg>
                New Progress Report
            </x-button>
        </div>
    </div>
    @if($activeProgressReport)
        <div class="flex gap-4">
            <div>
                <ul role="list" style="margin-left: 1px" class="divide-y divide-gray-100 overflow-hidden bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
                    @foreach($progressReports->sortBy('created_at', SORT_REGULAR, true) as $progressReport)
                        <li wire:key="{{$progressReport->id}}" class="relative flex justify-between gap-x-4 px-2 py-2  @if($activeProgressReport == $progressReport) bg-gray-300 @else hover:bg-gray-50 @endif  sm:px-4 cursor-pointer" wire:click="add({{$progressReport->id}})" >
                            <div class="flex shrink-0 items-center gap-x-4 pr-24" >
                                <div class="sm:flex sm:flex-col">
                                    <p class="text-sm leading-6 text-gray-900">{{ Str::limit($progressReport->name, 20, '...') }}</p>
                                    <p class="text-xs leading-6 text-gray-400">{{ $progressReport->created_at->format('d M Y') }}</p>
                                </div>
                                <svg class="absolute right-0 pr-4 h-5 w-10 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-white rounded-xl ring-1 ring-gray-900/5 w-full p-2 px-4">
                <livewire:goal-progress-report :progress-report="$activeProgressReport" />
            </div>
        </div>
    @else
        <div class="text-center mt-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto h-12 w-12 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
            </svg>

            <h3 class="mt-2 text-sm font-semibold text-gray-900">No progress reports</h3>
            <p class="mt-1 text-sm text-gray-500">Start tracking your progress!</p>
            <div class="mt-6 pb-4">
                <x-button>
                    <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                    </svg>
                    New Progress Reports
                </x-button>
            </div>
        </div>
    @endif
    <div>
        <x-button class="bg-red-500 float-right mt-4 hover:bg-red-800" wire:click="deleteGoal" wire:loading.attr="disabled" wire:confirm="Are you sure?">
            <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
            </svg>
            Remove Goal
        </x-button>
    </div>
</div>
