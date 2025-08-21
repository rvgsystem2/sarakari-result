<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 tracking-tight">
            ✏️ Edit Category
        </h2>
    </x-slot>

    <div class="max-w-lg mx-auto px-6 py-10">
        <!-- Card -->
        <div class="bg-white shadow-xl rounded-2xl p-8">

            <!-- Heading -->
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Update Category</h1>

            <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
               
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Category Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="name" name="name"
                           value="{{ old('name', $category->name) }}"
                           class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                           placeholder="Enter category name" required>
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex items-center justify-end space-x-4">
                    <a href="{{ route('category.index') }}"
                       class="px-5 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition">
                        Cancel
                    </a>
                    <button type="submit"
                            class="px-5 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium shadow-md transition">
                        💾 Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
