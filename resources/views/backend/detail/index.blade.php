<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold">Recruitment Details</h2>
    </x-slot>

    <div class="max-w-6xl mx-auto py-6">
        <div class="flex justify-end mb-4">
            <a href="{{ route('detail.create') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
                + Add New
            </a>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full text-left text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Time</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($details as $detail)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2 font-medium">{{ $detail->title }}</td>
                            <td class="px-4 py-2">{{ $detail->post_date}}</td>
                            <td class="px-4 py-2">{{ $detail->post_time ? $detail->post_time : '-' }}</td>
                            <td class="px-4 py-2">{{ Str::limit($detail->description, 50) }}</td>
                            <td class="px-4 py-2 text-center space-x-2">
                                <a href="{{ route('detail.edit', $detail->id) }}"
                                   class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                                   <a href="{{ route('detail.delete', $detail->id) }}"
                                    class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-3 text-center text-gray-500">
                                No details found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
