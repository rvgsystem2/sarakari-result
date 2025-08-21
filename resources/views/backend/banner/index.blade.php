<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">🎉 Banners</h2>
    </x-slot>

    <div class="max-w-6xl mx-auto py-8 px-4">
        <!-- Create Button -->
        <div class="flex justify-end mb-6">
            <a href="{{ route('banner.create') }}"
               class="px-5 py-2.5 bg-sky-600 hover:bg-sky-700 text-white rounded-xl shadow-md transition">
                ➕ Add Banner
            </a>
        </div>

        <!-- Banner List -->
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="bg-sky-600 text-white text-sm uppercase">
                    <tr>
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Title</th>
                        <th class="px-6 py-3">Paragraph</th>
                        <th class="px-6 py-3">Created At</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($banners as $banner)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 font-medium">{{ $banner->title }}</td>
                            <td class="px-6 py-4">{{ Str::limit($banner->paragraph, 60) }}</td>
                            <td class="px-6 py-4">{{ $banner->created_at->format('d M Y') }}</td>
                            <td class="px-6 py-4 flex gap-3">
                                <a href="{{ route('banner.edit', $banner->id) }}"
                                   class="text-sky-600 hover:underline">✏️ Edit</a>
                                   <a href="{{ route('banner.delete', $banner->id) }}"
                                    class="text-sky-600 hover:underline">✏️ Delete</a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-6 text-gray-500">No banners found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
