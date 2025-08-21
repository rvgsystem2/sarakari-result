<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 tracking-tight">
            🔗 Links Management
        </h2>
    </x-slot>

    <div class="container max-w-7xl mx-auto px-6 py-8">
        <!-- Heading + Add Button -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Manage Your Links</h1>
            <a href="{{ route('link.create') }}"
               class="px-5 py-2 rounded-xl bg-sky-700 hover:bg-sky-800 text-white font-medium shadow-md transition">
                ➕ Add New Link
            </a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-4 px-4 py-3 bg-green-100 border border-green-300 text-green-800 rounded-lg shadow-sm">
                ✅ {{ session('success') }}
            </div>
        @endif

        <!-- Links Table -->
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-left text-gray-700 text-sm uppercase tracking-wide">
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Category</th>
                        <th class="px-6 py-3">Title</th>
                        <th class="px-6 py-3">URL</th>
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($links as $link)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $link->category->name ?? '-' }}</td>
                            <td class="px-6 py-4 text-gray-800 font-semibold">{{ $link->title }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ $link->url }}" target="_blank"
                                   class="text-sky-600 hover:underline">
                                    {{ $link->url }}
                                </a>
                            </td>
                            <td class="px-6 py-4 text-center flex space-x-3 justify-center">
                                <a href="{{ route('link.edit', $link) }}"
                                   class="px-4 py-2 bg-sky-700 hover:bg-sky-800 text-white rounded-lg shadow-sm transition">
                                    ✏️ Edit
                                </a>
                                <a href="{{ route('link.delete', $link) }}"
                                   class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg shadow-sm transition"
                                   onclick="return confirm('Are you sure you want to delete this link?')">
                                    🗑️ Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-6 text-center text-gray-500">
                                🚫 No links found. Try adding one!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $links->links('pagination::tailwind') }}
        </div>
    </div>
</x-app-layout>
