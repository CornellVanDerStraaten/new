<header class="absolute inset-x-0 top-0 z-50 flex h-16 border-b border-gray-900/10 bg-white font-sans h-[70px]" x-data="{mobileMenuOpened: false}">
    <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <div class="flex sm:flex-1 flex-2 items-center gap-x-6">
            <button type="button" class="-m-3 p-3 md:hidden" @click="mobileMenuOpened = true">
                <span class="sr-only">Open main menu</span>
                <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
            <span class="sm:text-4xl text-xl text-primary font-bold">Goal Guardian</span>
        </div>
        <nav class="hidden items-center h-full md:flex md:gap-x-11 md:text-sm md:font-semibold md:leading-6 md:text-gray-700">
            <a href="{{ route('dashboard') }}" class="h-full flex items-center hover:bg-gray-50 p-2 @if(request()->routeIs('dashboard')) bg-gray-100 border-b-4 border-primary-dark @endif " ><span>Dashboard</span></a>
            <a href="{{ route('goals.index') }}" class="h-full flex items-center hover:bg-gray-50 p-2 @if(request()->routeIs('goals.index')) bg-gray-100 border-b-4 border-primary-dark @endif " ><span>Goals</span></a>
{{--            <a href="{{ route('progress.reports') }}" class="h-full flex items-center hover:bg-gray-50 p-2 @if(request()->routeIs('progress.reports')) bg-gray-100 border-b-4 border-primary-dark @endif " ><span>Progress Reports</span></a>--}}
        </nav>
        <div class="flex flex-1 items-center justify-end gap-x-8">
            <div class="relative" x-data="{userDropdownOpened: false}">
                <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false"
                        aria-haspopup="true" @click="userDropdownOpened = !userDropdownOpened">
                    <span class="sr-only">Open user menu</span>
                    <span class="hidden lg:flex lg:items-center">
                        <span class="ml-4 text-sm font-semibold leading-6 text-gray-900"
                              aria-hidden="true">{{ auth()->user()->email }}</span>
                        <svg x-show="!userDropdownOpened" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 h-4 w-5 text-gray-400">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>

                        <svg x-show="userDropdownOpened" x-cloak xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             class="ml-2 h-4 w-5 text-gray-400">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                            </svg>
                    </span>
                </button>

                <div x-show="userDropdownOpened"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     x-cloak
                     class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                     role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-50", Not Active: "" -->
                    <a href="{{ route('profile.show') }}" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1"
                       id="user-menu-item-0">Your profile</a>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <a href="{{ route('logout') }}" @click.prevent="$root.submit()" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1"
                           id="user-menu-item-1">Sign out</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div x-cloak x-show="mobileMenuOpened" class="lg:hidden" role="dialog" aria-modal="true" @click.outside="mobileMenuOpened = false">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div
            class="fixed inset-y-0 left-0 z-50 w-full overflow-y-auto bg-white px-4 pb-6 sm:max-w-sm sm:px-6 sm:ring-1 sm:ring-gray-900/10">
            <div class="-ml-0.5 flex h-16 items-center gap-x-6">
                <button type="button" class="-m-2.5 p-2.5 text-gray-700" @click="mobileMenuOpened = false">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
                <div class="-ml-0.5">
                    <a href="{{ route('dashboard') }}" class="-m-1.5 block p-1.5">
                        <span class="sr-only">Goal Guardian</span>
                        <span class="sm:text-4xl text-xl text-primary font-bold">Goal Guardian</span>
                    </a>
                </div>
            </div>
            <div class="mt-2 space-y-2">
                <a href="{{ route('dashboard') }}"
                   class="-mx-3 block px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 @if(request()->routeIs('dashboard')) bg-gray-100 border-l-4 border-primary-dark @endif">Dashboard</a>
                <a href="{{ route('goals.index') }}"
                   class="-mx-3 block px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 @if(request()->routeIs('goals.index')) bg-gray-100 border-l-4 border-primary-dark @endif">Goals</a>
            </div>
        </div>
    </div>
</header>
