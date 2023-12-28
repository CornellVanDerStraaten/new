<div>
    <div class="flex justify-between mb-4 mt-1">
        <h1 class="text-3xl font-bold">Edit Report Questions</h1>
        <div class="flex gap-3">
            <a class="flex" href="{{ route('goals.show', $goal) }}">
                <x-button style="background-color: gray;" class="hover:bg-gray-700 float-right">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    Return without saving
                </x-button>
            </a>
            <x-button class="bg-primary float-right" wire:loading.attr="disabled" wire:click="save">
                <svg class="-ml-0.5 mr-1.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                </svg>
                Save Changes
            </x-button>
        </div>
    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <ul role="list" wire:sortable="updateQuestionOrder" class="divide-y divide-gray-100 overflow-hidden bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
        @forelse($questions as $key => $question)
            <li wire:sortable.item="{{ $key }}" wire:key="question-{{ $key }}" class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6">
                <div class="flex min-w-0 gap-x-4">
                    <svg wire:sortable.handle xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <span>{{ $loop->iteration }}.</span>
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                            @if(!str_ends_with($question['question'], '?'))
                                {{ $question['question'] }}?
                            @else
                                {{ $question['question'] }}
                            @endif
                        </p>
                    </div>
                </div>
                <div wire:click="removeQuestion({{ $key }})" class="flex shrink-0 items-center gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
            </li>
        @empty
            <li class="p-6 py-3">No questions</li>
        @endforelse
    </ul>

    <ul class="mt-10 divide-y divide-gray-100 overflow-hidden bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
        <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6">
            <div class="flex min-w-0 gap-x-4 w-1/2">
                <div class="w-1/2 flex-auto">
                    <input type="text" class="text-sm font-semibold leading-6 text-gray-900 w-full" wire:model="newQuestion">
                </div>
            </div>
            <div class="flex shrink-0 items-center gap-x-4">
                <svg wire:click="addQuestion" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary hover:primary-dark cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </div>
        </li>
    </ul>

</div>
