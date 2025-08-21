<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">🎉 faqs</h2>
    </x-slot>

    <div class="max-w-6xl mx-auto py-8 px-4">
        <!-- Create Button -->
        <div class="flex justify-end mb-6">
            <a href="{{ route('faq.create') }}"
               class="px-5 py-2.5 bg-sky-600 hover:bg-sky-700 text-white rounded-xl shadow-md transition">
                ➕ Add faq
            </a>
        </div>

        <!-- faq List -->
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="bg-sky-600 text-white text-sm uppercase">
                    <tr>
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Title</th>
                        <th class="px-6 py-3">Paragraph</th>
                        <th class="px-6 py-3">Created At</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($faqs as $faq)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 font-medium">{{ $faq->question }}</td>
                            <td class="px-6 py-4">{{ Str::limit($faq->answer, 60) }}</td>
                            <td class="px-6 py-4">{{ $faq->created_at->format('d M Y') }}</td>
                            <td class="px-6 py-4 flex gap-3">
                                <a href="{{ route('faq.edit', $faq->id) }}"
                                   class="text-sky-600 hover:underline">✏️ Edit</a>
                                   <a href="{{ route('faq.delete', $faq->id) }}"
                                    class="text-sky-600 hover:underline">✏️ Delete</a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-6 text-gray-500">No faqs found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
