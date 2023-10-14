<div class="p-6">
    <form wire:submit="save">
        <div class="bg-white mb-4">
            <h3 class="text-3xl font-semibold leading-6 text-gray-900">Create goal</h3>
        </div>
        <div class="pb-4">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-2">
                <input type="text" wire:model="name" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6" placeholder="Able to run the 10km marathon">
            </div>
        </div>
        <fieldset>
            <legend class="sr-only">Include in progress report email</legend>
            <div class="space-y-5">
                <div class="relative flex items-start">
                    <div class="flex h-6 items-center">
                        <input id="active" wire:model="active" aria-describedby="active-description" name="active" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary">
                    </div>
                    <div class="ml-3 text-sm leading-6">
                        <label for="active" class="font-medium text-gray-900">Include in email</label>
                        <p id="active-description" class="text-gray-500">Include this goal in the monthly progress report email?</p>
                    </div>
                </div>
            </div>
        </fieldset>

        <div class="flex items-center justify-end mt-4">
            <span wire:click="closeModal" class="cursor-pointer text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                Close
            </span>

            <button @if($saving) disabled @endif type="submit" class="ml-4 inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-dark focus:bg-primary-dark active:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary-dark focus:ring-offset-2 transition ease-in-out duration-150"  >
                Create
            </button>
        </div>
    </form>
</div>
