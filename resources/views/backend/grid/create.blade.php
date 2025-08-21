<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">➕ Create Grid</h2>
    </x-slot>

    <div class="max-w-xl mx-auto py-8">
        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <form action="{{ route('grid.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Title -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Grid Title <span class="text-red-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title') }}"
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2.5 text-gray-800"
                           placeholder="Enter grid title" required>
                    @error('title')
                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-3">
                    <a href="{{ route('grid.index') }}"
                       class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                        Cancel
                    </a>
                    <button type="submit"
                            class="px-5 py-2.5 bg-indigo-600 text-white font-medium rounded-lg shadow hover:bg-indigo-700 transition">
                        💾 Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
