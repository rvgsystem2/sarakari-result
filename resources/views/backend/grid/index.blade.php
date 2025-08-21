<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Grids</h2>
    </x-slot>

    <div class="max-w-6xl mx-auto py-6">
        @if(session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end mb-4">
            <a href="{{ route('grid.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Create Grid</a>
        </div>

        <table class="table-auto w-full border">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($grids as $grid)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $grid->id }}</td>
                        <td class="px-4 py-2">{{ $grid->title }}</td>
                        <td class="px-4 py-2 flex space-x-2">
                            <!-- Edit -->
                            <a href="{{ route('grid.edit', $grid->id) }}"
                               class="bg-yellow-500 text-white px-3 py-1 rounded">
                                Edit
                            </a>
                            <a href="{{ route('grid.delete', $grid->id) }}"
                                class="bg-red-500 text-white px-3 py-1 rounded">
                                 Delete
                             </a>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-4">No grids found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
