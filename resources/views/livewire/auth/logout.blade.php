<div class="max-w-md mx-auto py-10">
    @if (session('success'))
        <div class="mb-6 p-4 rounded border border-green-300 bg-green-50 text-green-800">
            {{ session('success') }}
        </div>
    @endif

    <div class="p-6 border rounded shadow-sm bg-white">
        <h1 class="text-xl font-semibold mb-4">{{ __('quickpanel.confirm_logout') }}</h1>
        <p class="mb-6 text-gray-700">{{ __('quickpanel.confirm_logout_message') }}</p>

        <div class="flex items-center gap-3">
            <button wire:click="confirmLogout" wire:loading.attr="disabled" class="px-4 py-2 bg-red-600 text-white rounded">
                <span wire:loading.remove>{{ __('quickpanel.yes_log_me_out') }}</span>
                <span wire:loading>{{ __('quickpanel.logging_out') }}</span>
            </button>

            <a href="{{ url()->previous() ?: route('home') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded">
                {{ __('quickpanel.cancel') }}
            </a>
        </div>
    </div>
</div>
