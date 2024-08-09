<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight bg-gray-400 p-2 rounded-lg">
            {{ __('User Profile') }}
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
                <div>
                    <label for="confirm" class="font-times-new-roman">Confirm Deletion, Enter "DELETE":</label><br>
                    <input type="text" id="confirm" name="confirm" class="font-times-new-roman"><br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
