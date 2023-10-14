<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="py-3">
        <nav class="flex" aria-label="Breadcrumb">
            <div class="flex sm:hidden">
                <a href="{{ url()->previous() }}" class="group inline-flex space-x-3 text-sm font-medium text-gray-500 hover:text-gray-700">
                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
                    </svg>
                    <span>Back</span>
                </a>
            </div>
            <div class="hidden sm:block">
                @unless ($breadcrumbs->isEmpty())
                    <ol role="list" class="flex items-center space-x-4">
                        <li>
                            <div>
                                <a href="{{ route('dashboard') }}" class="text-gray-400 hover:text-gray-500">
                                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Home</span>
                                </a>
                            </div>
                        </li>
                        @foreach ($breadcrumbs as $breadcrumb)
                            @if (!is_null($breadcrumb->url) && !$loop->last)
                                <li>
                                    <div class="flex items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-300" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                        </svg>
                                        <a href="{{ $breadcrumb->url }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ $breadcrumb->title }}</a>
                                    </div>
                                </li>
                            @else
                                <li>
                                    <div class="flex items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-300" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                        </svg>
                                        <span class="ml-4 text-sm font-medium text-gray-500">{{ $breadcrumb->title }}</span>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ol>
                @endunless
            </div>
        </nav>
    </div>
</div>
