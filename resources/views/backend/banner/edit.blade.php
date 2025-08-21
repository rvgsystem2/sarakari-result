<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">✏️ Edit Banner</h2>
    </x-slot>

    <div class="max-w-2xl mx-auto py-8 px-6">
        <div class="bg-white p-6 rounded-2xl shadow-lg">
            <form action="{{ route('banner.update', $banner->id) }}" method="POST" class="space-y-6">
                @csrf


                <!-- Title -->
                <div>
                    <label class="block font-semibold text-gray-700">Title</label>
                    <input type="text" name="title" value="{{ old('title', $banner->title) }}" required
                           class="w-full px-4 py-3 border rounded-xl focus:ring focus:ring-sky-300">
                </div>

                <!-- Paragraph -->
                <div>
                    <label class="block font-semibold text-gray-700">Paragraph</label>
                    <textarea name="paragraph" rows="4"
                              class="w-full px-4 py-3 border rounded-xl focus:ring focus:ring-sky-300">{{ old('paragraph', $banner->paragraph) }}</textarea>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between">
                    <a href="{{ route('banner.index') }}"
                       class="px-5 py-2.5 bg-gray-200 hover:bg-gray-300 rounded-xl">⬅ Back</a>
                    <button type="submit"
                            class="px-6 py-2.5 bg-sky-600 hover:bg-sky-700 text-white rounded-xl shadow-md">
                        💾 Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
