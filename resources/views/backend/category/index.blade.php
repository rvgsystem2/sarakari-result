<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 tracking-tight">
            📂 Categories
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto px-6 py-10">
        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-6 px-4 py-3 bg-green-100 border border-green-300 text-green-800 rounded-lg shadow-sm">
                ✅ {{ session('success') }}
            </div>
        @endif

        <!-- Create Button -->
        <div class="flex justify-end mb-6">
            <a href="{{ route('category.create') }}"
               class="px-5 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium shadow-md transition">
                ➕ Create Category
            </a>
        </div>

        <!-- Table Card -->
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-left text-gray-700 text-sm uppercase tracking-wide">
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($categorys as $category)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $category->id }}</td>
                            <td class="px-6 py-4 text-gray-800">{{ $category->name }}</td>
                            <td class="px-6 py-4 text-center flex justify-center space-x-3">
                                <a href="{{ route('category.edit', $category) }}"
                                   class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg shadow-sm transition">
                                    ✏️ Edit
                                </a>
                                <a href="{{ route('category.delete', $category) }}"
                                   class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg shadow-sm transition"
                                   onclick="return confirm('Are you sure you want to delete this category?')">
                                    🗑️ Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-6 text-center text-gray-500">
                                🚫 No categories found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
