<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sanbox') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <flux:select variant="listbox" placeholder="Test...">
                        <flux:option value="10">10</flux:option>
                        <flux:option value="25">25</flux:option>
                        <flux:option value="50">50</flux:option>
                        <flux:option value="100">100</flux:option>
                    </flux:select>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
