<!-- resources/views/fees/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Edit Fee</h2>
    </x-slot>

    <div class="max-w-lg mx-auto py-6">
        <form action="{{ route('fee.update', $fee) }}" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
            @csrf
       
            <div>
                <label class="block font-medium">Group</label>
                <input type="text" name="group" value="{{ old('group', $fee->group) }}" class="w-full border rounded-lg p-2">
                @error('group') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block font-medium">Category</label>
                <input type="text" name="category" value="{{ old('category', $fee->category) }}" class="w-full border rounded-lg p-2">
                @error('category') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block font-medium">Amount</label>
                <input type="number" step="0.01" name="amount" value="{{ old('amount', $fee->amount) }}" class="w-full border rounded-lg p-2">
                @error('amount') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block font-medium">Payment Modes (comma separated)</label>
                <input type="text" name="payment_modes" value="{{ old('payment_modes', $fee->payment_modes) }}" class="w-full border rounded-lg p-2">
                @error('payment_modes') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div class="flex justify-end space-x-2">
                <a href="{{ route('fee.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
