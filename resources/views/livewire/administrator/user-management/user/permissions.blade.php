<x-livewire-modal::stack fullscreen="true">
<div class="fixed inset-0 z-50 flex items-center justify-center">
    <div class="fixed inset-0 bg-gray-900/50"></div>
    <div class="relative w-full max-w-4xl p-6 bg-white rounded-lg shadow dark:bg-gray-800">
        <div class="flex items-start justify-between pb-3 border-b dark:border-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                {{ __('quickpanel.permissions') }}: {{ isset($user) ? $user->name : '' }}
            </h3>
            <button type="button" class="text-gray-400 hover:text-gray-900 dark:hover:text-white" aria-label="Close" wire:click="$dispatch('modal-close')">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{ __('quickpanel.permissions_description') }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('quickpanel.search') }}</label>
                <input wire:model.live="search" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" />
                @error('search')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror

                <ul class="mt-4 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($permissions as $permission)
                        <li class="py-3">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $permission->name }}</p>
                                </div>
                                <button type="button" class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 dark:focus:ring-green-800" wire:click="assign({{ $permission->id }})" onclick="return confirm('{{ __('quickpanel.are_you_sure') }}')">
                                    <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                                    {{ __('quickpanel.assign') }}
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach(isset($user) && isset($user->permissions) ? $user->permissions : [] as $permission)
                        <li class="py-3">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $permission->name }}</p>
                                </div>
                                <button type="button" class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800" wire:click="delete({{ $permission->id }})" onclick="return confirm('{{ __('quickpanel.are_you_sure') }}')">
                                    <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M1 7h22M8 7V5a3 3 0 013-3h2a3 3 0 013 3v2" /></svg>
                                    {{ __('quickpanel.remove') }}
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600" wire:click="close">{{ __('quickpanel.close') }}</button>
        </div>
    </div>
</div>
</x-livewire-modal::stack>>
