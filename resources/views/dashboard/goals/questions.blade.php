<x-app-layout>
    <x-slot name="breadcrumbs">
        {!! $breadcrumbs ?? null !!}
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <livewire:goal-question-editor :goal="$goal" :questions="$questions" />
            </div>
        </div>
    </div>
</x-app-layout>
