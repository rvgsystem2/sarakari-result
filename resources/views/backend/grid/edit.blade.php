<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit Grid</h2>
    </x-slot>

    <div class="max-w-lg mx-auto py-6">
        <form action="{{ route('grid.update', $grid->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
      
            <!-- Title -->
            <div>
                <label class="block text-sm font-medium mb-1">Title</label>
                <input type="text" name="title" value="{{ old('title', $grid->title) }}"
                       class="w-full border p-2 rounded focus:ring focus:ring-indigo-200" required>
                @error('title')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit -->
            <div class="flex justify-end">
                <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
