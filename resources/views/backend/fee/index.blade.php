<!-- resources/views/fees/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Fee Management</h2>
    </x-slot>

    <div class="max-w-5xl mx-auto py-6">
        <a href="{{ route('fee.create') }}"
           class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
           + Add Fee
        </a>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Group</th>
                        <th class="px-4 py-2">Category</th>
                        <th class="px-4 py-2">Amount</th>
                        <th class="px-4 py-2">Payment Modes</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($fees as $fee)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $fee->group }}</td>
                            <td class="px-4 py-2">{{ $fee->category }}</td>
                            <td class="px-4 py-2">₹{{ $fee->amount }}</td>
                            <td class="px-4 py-2">{{ $fee->payment_modes }}</td>
                            <td class="px-4 py-2 flex space-x-2">
                                <a href="{{ route('fee.edit', $fee) }}"
                                   class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                                   <a href="{{ route('fee.delete', $fee) }}"
                                   class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</a>

                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="px-4 py-2 text-center">No fees found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">{{ $fees->links() }}</div>
    </div>
</x-app-layout>
