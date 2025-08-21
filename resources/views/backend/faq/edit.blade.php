<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit FAQ</h2>
    </x-slot>

    <div class="max-w-xl mx-auto p-6">
        <form action="{{ route('faq.update', $faq) }}" method="POST" class="space-y-4 bg-white shadow-lg rounded-lg p-6">
            @csrf

            <div>
                <label class="block font-medium">Question</label>
                <input type="text" name="question" value="{{ $faq->question }}" class="w-full border rounded-lg p-2" required>
            </div>

            <div>
                <label class="block font-medium">Answer</label>
                <textarea name="answer" rows="4" class="w-full border rounded-lg p-2" required>{{ $faq->answer }}</textarea>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('faq.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Cancel</a>
                <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
