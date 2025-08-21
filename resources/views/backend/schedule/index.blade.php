<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Important Dates</h2>
    </x-slot>
  <div class="max-w-full mx-auto p-6">
    <div class="flex items-center justify-between mb-6">
      <h1 class="text-2xl font-bold">CCRAS Recruitment Schedules</h1>
      <a href="{{ route('schedule.create') }}" class="px-4 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700">+ New</a>
    </div>

    @if(session('success'))
      <div class="mb-4 rounded-xl bg-green-100 text-green-800 px-4 py-3">{{ session('success') }}</div>
    @endif

    <div class="overflow-x-auto bg-white rounded-2xl shadow">
      <table class="min-w-full text-sm">
        <thead class="bg-slate-100 text-slate-600">
          <tr>
            <th class="px-4 py-3 text-left">Id</th>

            <th class="px-4 py-3 text-left">Apply (Start → Last)</th>
            <th class="px-4 py-3 text-left">Fee Last</th>
            <th class="px-4 py-3 text-left">Correction (Start → End)</th>
            <th class="px-4 py-3 text-left">Exam</th>
            <th class="px-4 py-3 text-left">Admit Card</th>
            <th class="px-4 py-3 text-left">Result</th>
            <th class="px-4 py-3 text-left">Note</th>
            <th class="px-4 py-3 text-left">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y">
          @forelse($schedules as $i => $schedule)
            <tr>
              <td class="px-4 py-3">{{ $i + 1 }}</td>

              <td class="px-4 py-3">
                {{ $schedule->apply_start_date }} → {{ $schedule->apply_last_date }}
              </td>
              <td class="px-4 py-3">{{ $schedule->fee_last_date }}</td>
              <td class="px-4 py-3">
                {{ $schedule->correction_start_date }} → {{ $schedule->correction_end_date }}
              </td>
              <td class="px-4 py-3">{{ $schedule->exam_date ?? 'Notify Later' }}</td>
              <td class="px-4 py-3">{{ $schedule->admit_card_note ?? 'Before Exam' }}</td>
              <td class="px-4 py-3">{{ $schedule->result_note ?? 'Will Be Updated Soon' }}</td>
              <td class="px-4 py-3 max-w-[240px] truncate" title="{{ $schedule->note }}">{{ $schedule->note }}</td>
              <td class="px-4 py-3 space-x-2 space-y-2">
                <a href="{{ route('schedule.edit', $schedule) }}" class="px-3 py-1 rounded-lg bg-yellow-500 text-white hover:bg-yellow-600">Edit</a>

                <a href="{{ route('schdeule.delete', $schedule) }}" class="px-3 py-1 rounded-lg bg-red-500 text-white hover:bg-red-600">Delete</a>

              </td>
            </tr>
          @empty
            <tr>
              <td colspan="10" class="px-4 py-10 text-center text-slate-500">No schedules yet. Click “New”.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</x-app-layout>
