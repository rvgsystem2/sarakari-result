<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Total Posts</h2>
    </x-slot>

    <div class="max-w-6xl mx-auto py-6">
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">All Posts</h3>
            <a href="{{ route('totalpost.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Add Post</a>
        </div>

        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100 text-gray-600 text-sm uppercase">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Min Age</th>
                        <th class="px-4 py-2">Max Age</th>
                        <th class="px-4 py-2">Note</th>
                        <th class="px-4 py-2">Total</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($totalposts as $totalpost)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $totalpost->id }}</td>
                            <td class="px-4 py-2">{{ $totalpost->min_age ?? 'N/A' }}</td>
                            <td class="px-4 py-2">{{ $totalpost->max_age ?? 'N/A' }}</td>
                            <td class="px-4 py-2">{{ $totalpost->note }}</td>
                            <td class="px-4 py-2">{{ $totalpost->total }}</td>
                            <td class="px-4 py-2 flex space-x-2">
                                <a href="{{ route('totalpost.edit', $totalpost->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                                <a href="{{ route('totalpost.delete', $totalpost->id) }}" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $totalposts->links() }}
        </div>
    </div>
</x-app-layout>
