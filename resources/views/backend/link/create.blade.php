<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 tracking-tight">
            ➕ Add New Link
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto px-6 py-10">
        <!-- Card Container -->
        <div class="bg-white shadow-xl rounded-2xl p-8">

            <!-- Heading -->
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Create a New Link</h1>

            <form action="{{ route('link.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Category -->
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">
                        Category <span class="text-red-500">*</span>
                    </label>
                    <select id="category_id" name="category_id"
                            class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-sky-500 focus:border-sky-500">
                        <option value="">-- Select a Category --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                        Title <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="title" name="title"
                           value="{{ old('title') }}"
                           class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-sky-500 focus:border-sky-500"
                           placeholder="Enter link title">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- URL -->
                <div>
                    <label for="url" class="block text-sm font-medium text-gray-700 mb-2">
                        URL <span class="text-red-500">*</span>
                    </label>
                    <input type="url" id="url" name="url"
                           value="{{ old('url') }}"
                           class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-sky-500 focus:border-sky-500"
                           placeholder="https://example.com">
                    @error('url')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex items-center justify-end space-x-4">
                    <a href="{{ route('link.index') }}"
                       class="px-5 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition">
                        Cancel
                    </a>
                    <button type="submit"
                            class="px-5 py-2 rounded-lg bg-sky-700 hover:bg-sky-800 text-white font-medium shadow-md transition">
                        💾 Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
