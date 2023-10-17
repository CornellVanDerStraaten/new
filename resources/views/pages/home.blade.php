<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <main>
        <div class="relative isolate">
            <div class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-2xl lg:ml-24 xl:ml-48" aria-hidden="true">
                <div class="aspect-[701/1036] w-[50.0625rem] bg-gradient-to-tr from-primary-dark to-primary-light opacity-50" style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)"></div>
            </div>
            <div class="overflow-hidden">
                <div class="mx-auto max-w-7xl px-6 pb-6 pt-6 sm:pt-6 lg:px-8 lg:pt-6">
                    <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                        <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Keeping you focused on the long-term</h1>
                            <p class="relative mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">Free unintrusive email reminders will give you that push you need to keep working on those easy-to-forget long-term goals.</p>
                            <div class="mt-10 flex items-center gap-x-6">
                                <a href="#" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Get started for free</a>
                                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                        <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                            <div class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-64 lg:order-last lg:pt-36 xl:order-none xl:pt-64">
                                <div class="relative">
                                    <img src="{{ asset('storage/assets/runner.jpg') }}" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                </div>
                            </div>
                            <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-40 lg:pt-28">
                                <div class="relative">
                                    <img src="{{ asset('storage/assets/writing1.jpg') }}" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('storage/assets/writing2.jpg') }}" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                </div>
                            </div>
                            <div class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-64 lg:order-last lg:pt-36 xl:order-none xl:pt-64">
                                <div class="relative">
                                    <img src="{{ asset('storage/assets/mountain.jpg') }}" alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--    STEPS    --}}
        <div class="bg-white py-12 sm:py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900 mb-6">The process</h2>

                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-8 overflow-hidden lg:mx-0 lg:max-w-none lg:grid-cols-4">

                    <div>
                        <time datetime="2021-08" class="flex items-center text-sm font-semibold leading-6 text-primary">
                            <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                                <circle cx="2" cy="2" r="2" fill="currentColor" />
                            </svg>
                            Step 1
                            <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
                        </time>
                        <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Tell us your long-term goals</p>
                        <p class="mt-1 text-base leading-7 text-gray-600">Nihil aut nam. Dignissimos a pariatur et quos omnis. Aspernatur asperiores et dolorem dolorem optio voluptate repudiandae.</p>
                    </div>
                    <div>
                        <time datetime="2021-12" class="flex items-center text-sm font-semibold leading-6 text-primary">
                            <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                                <circle cx="2" cy="2" r="2" fill="currentColor" />
                            </svg>
                            Step 2
                            <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
                        </time>
                        <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Forget about us</p>
                        <p class="mt-1 text-base leading-7 text-gray-600">Provident quia ut esse. Vero vel eos repudiandae aspernatur. Cumque minima impedit sapiente a architecto nihil.</p>
                    </div>
                    <div>
                        <time datetime="2022-02" class="flex items-center text-sm font-semibold leading-6 text-primary">
                            <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                                <circle cx="2" cy="2" r="2" fill="currentColor" />
                            </svg>
                            Step 3
                            <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
                        </time>
                        <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">We send a reminder</p>
                        <p class="mt-1 text-base leading-7 text-gray-600">Sunt perspiciatis incidunt. Non necessitatibus aliquid. Consequatur ut officiis earum eum quia facilis. Hic deleniti dolorem quia et.</p>
                    </div>
                    <div>
                        <time datetime="2022-12" class="flex items-center text-sm font-semibold leading-6 text-primary">
                            <svg viewBox="0 0 4 4" class="mr-4 h-1 w-1 flex-none" aria-hidden="true">
                                <circle cx="2" cy="2" r="2" fill="currentColor" />
                            </svg>
                            Step 4
                            <div class="absolute -ml-2 h-px w-screen -translate-x-full bg-gray-900/10 sm:-ml-4 lg:static lg:-mr-6 lg:ml-8 lg:w-auto lg:flex-auto lg:translate-x-0" aria-hidden="true"></div>
                        </time>
                        <p class="mt-6 text-lg font-semibold leading-8 tracking-tight text-gray-900">Tell us your progress</p>
                        <p class="mt-1 text-base leading-7 text-gray-600">Ut ipsa sint distinctio quod itaque nam qui. Possimus aut unde id architecto voluptatem hic aut pariatur velit.</p>
                    </div>
                </div>
            </div>
        </div>

        {{--    FAQ    --}}
        <div class="bg-white">
            <div class="mx-auto max-w-7xl px-6 py-16 sm:py-24 lg:px-8">
                <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Frequently asked questions</h2>
                <p class="mt-6 max-w-2xl text-base leading-7 text-gray-600">Have a different question and can’t find the answer you’re looking for? Reach out to our support team by <a href="#" class="font-semibold text-primary hover:text-primary-dark">sending us an email</a> and we’ll get back to you as soon as we can.</p>
                <div class="mt-20">
                    <dl class="space-y-16 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-16 sm:space-y-0 lg:grid-cols-3 lg:gap-x-10">
                        <x-faq-item>
                            <x-slot:question>
                                Will I ever get spammed by this service?
                            </x-slot:question>

                            Our intention is to be as unintrusive as possible. We only send one email each month unless you want or need more!
                        </x-faq-item>
                        <x-faq-item>
                            <x-slot:question>
                                How many goals can I track?
                            </x-slot:question>

                            You can track as many goals as you want! The email we send each month summarizes all goals you have and let's you easily and quickly answer each one.
                        </x-faq-item>
                        <x-faq-item>
                            <x-slot:question>
                                How many goals can I track?
                            </x-slot:question>

                            You can track as many goals as you want! The email we send each month summarizes all goals you have and let's you easily and quickly answer each one.
                        </x-faq-item>
                        <x-faq-item>
                            <x-slot:question>
                                How many goals can I track?
                            </x-slot:question>

                            You can track as many goals as you want! The email we send each month summarizes all goals you have and let's you easily and quickly answer each one.
                        </x-faq-item>
                        <x-faq-item>
                            <x-slot:question>
                                How many goals can I track?
                            </x-slot:question>

                            You can track as many goals as you want! The email we send each month summarizes all goals you have and let's you easily and quickly answer each one.
                        </x-faq-item>
                        <x-faq-item>
                            <x-slot:question>
                                How many goals can I track?
                            </x-slot:question>

                            You can track as many goals as you want! The email we send each month summarizes all goals you have and let's you easily and quickly answer each one.
                        </x-faq-item>

                        <!-- More questions... -->
                    </dl>
                </div>
            </div>
        </div>
    </main>

    <x-pages.footer/>
</x-guest-layout>

