<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Add Requirement</h2>
    </x-slot>

    <div class="max-w-lg mx-auto py-6">
        <form action="{{ route('requirement.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
            @csrf
            <div>
                <label class="block font-medium">Post Name</label>
                <input type="text" name="post_name" class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block font-medium">Eligibility</label>
                <textarea name="eligibility" class="w-full border rounded px-3 py-2" required></textarea>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('requirement.index') }}" class="mr-3 text-gray-600 hover:underline">Cancel</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
