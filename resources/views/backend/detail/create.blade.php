<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold">Add Recruitment Detail</h2>
    </x-slot>

    <div class="max-w-3xl mx-auto py-6">
        <form action="{{ route('detail.store') }}" method="POST" class="space-y-6 bg-white p-6 rounded-xl shadow">
            @csrf

            <div>
                <label class="block mb-1 font-medium">Title</label>
                <input type="text" name="title" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 font-medium">Post Date</label>
                    <input type="date" name="post_date" class="w-full border rounded-lg px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Post Time</label>
                    <input type="time" name="post_time" class="w-full border rounded-lg px-3 py-2">
                </div>
            </div>

            <div>
                <label class="block mb-1 font-medium">Description</label>
                <textarea name="description" rows="4" class="w-full border rounded-lg px-3 py-2" required></textarea>
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('detail.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
