<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Requirements</h2>
    </x-slot>

    <div class="max-w-5xl mx-auto py-6">
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between mb-4">
            <h3 class="text-lg font-bold">All Requirements</h3>
            <a href="{{ route('requirement.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + Add Requirement
            </a>
        </div>

        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 border">#</th>
                        <th class="px-4 py-2 border">Post Name</th>
                        <th class="px-4 py-2 border">Eligibility</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($requirements as $req)
                        <tr>
                            <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 border">{{ $req->post_name }}</td>
                            <td class="px-4 py-2 border">{{ $req->eligibility }}</td>
                            <td class="px-4 py-2 border">
                                <a href="{{ route('requirement.edit', $req->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <a href="{{ route('requirement.delete', $req->id) }}" class="text-blue-600 hover:underline">Delete</a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-3 text-center text-gray-500">No requirements found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $requirements->links() }}
        </div>
    </div>
</x-app-layout>
