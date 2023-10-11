<div class="pt-6" x-data="{questionOpen: false}">
    <dt>
        <!-- Expand/collapse question button -->
        <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false" @click="questionOpen = !questionOpen">
            <span class="text-base font-semibold leading-7">{{ $question }}</span>
            <span class="ml-6 flex h-7 items-center">

                <svg x-show="!questionOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>

                <svg x-show="questionOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                </svg>
              </span>
        </button>
    </dt>
    <dd class="mt-2 pr-12" id="faq-0" x-show="questionOpen">
        <p class="text-base leading-7 text-gray-600">{{ $slot }}</p>
    </dd>
</div>
