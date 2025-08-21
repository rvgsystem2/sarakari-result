<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit Total Post</h2>
    </x-slot>

    <div class="max-w-lg mx-auto py-6">
        <form action="{{ route('totalpost.update', $totalpost->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
            @csrf

            <div>
                <label class="block font-semibold">Minimum Age</label>
                <input type="text" name="min_age" value="{{ old('min_age', $totalpost->min_age) }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-semibold">Maximum Age</label>
                <input type="text" name="max_age" value="{{ old('max_age', $totalpost->max_age) }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block font-semibold">Note</label>
                <textarea name="note" class="w-full border rounded p-2">{{ old('note', $totalpost->note) }}</textarea>
            </div>

            <div>
                <label class="block font-semibold">Total Posts</label>
                <input type="number" name="total" value="{{ old('total', $totalpost->total) }}" class="w-full border rounded p-2" required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
