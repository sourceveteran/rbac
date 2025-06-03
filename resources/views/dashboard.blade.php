<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <p><strong>Your role(s):</strong> {{ implode(', ', auth()->user()->getRoleNames()->toArray()) }}</p>
                <hr>
                <h3>Permissions:</h3>
                <ul>
                    @can('view posts')
                        <li>You can view posts ✅</li>
                    @else
                        <li>You <strong>cannot</strong> view posts ❌</li>
                    @endcan

                    @can('create posts')
                        <li>You can create posts ✅</li>
                    @else
                        <li>You <strong>cannot</strong> create posts ❌</li>
                    @endcan

                    @can('edit posts')
                        <li>You can edit posts ✅</li>
                    @else
                        <li>You <strong>cannot</strong> edit posts ❌</li>
                    @endcan

                    @can('delete posts')
                        <li>You can delete posts ✅</li>
                    @else
                        <li>You <strong>cannot</strong> delete posts ❌</li>
                    @endcan

                    @can('manage users')
                        <li>You can manage users ✅</li>
                    @else
                        <li>You <strong>cannot</strong> manage users ❌</li>
                    @endcan
                </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
