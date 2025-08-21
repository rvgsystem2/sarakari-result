<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Important Dates</h2>
    </x-slot>
  <div class="max-w-3xl mx-auto p-6">
    <div class="mb-6 flex items-center justify-between">
      <h1 class="text-2xl font-bold">Edit Schedule</h1>
      <a href="{{ route('schedule.index') }}" class="text-indigo-700 hover:underline">← Back</a>
    </div>

    <form action="{{ route('schedule.update', $schedule) }}" method="POST" class="bg-white rounded-2xl shadow p-6 space-y-5">
      @csrf


      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1">Apply Online Start Date</label>
          <input name="apply_start_date" type="date" class="w-full rounded-xl border px-3 py-2" value="{{ old('apply_start_date', $schedule->apply_start_date) }}">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Apply Online Last Date</label>
          <input name="apply_last_date" type="date" class="w-full rounded-xl border px-3 py-2" value="{{ old('apply_last_date', $schedule->apply_last_date) }}">
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Last Date For Fee Payment</label>
        <input name="fee_last_date" type="date" class="w-full rounded-xl border px-3 py-2" value="{{ old('fee_last_date', $schedule->fee_last_date) }}">
      </div>

      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1">Correction Start Date</label>
          <input name="correction_start_date" type="date" class="w-full rounded-xl border px-3 py-2" value="{{ old('correction_start_date', $schedule->correction_start_date) }}">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Correction End Date</label>
          <input name="correction_end_date" type="date" class="w-full rounded-xl border px-3 py-2" value="{{ old('correction_end_date', $schedule->correction_end_date) }}">
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Exam Date (optional)</label>
        <input name="exam_date" type="text" class="w-full rounded-xl border px-3 py-2" value="{{ old('exam_date', $schedule->exam_date) }}">
      </div>

      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1">Admit Card</label>
          <input name="admit_card_note" type="text" class="w-full rounded-xl border px-3 py-2" value="{{ old('admit_card_note', $schedule->admit_card_note) }}">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Result</label>
          <input name="result_note" type="text" class="w-full rounded-xl border px-3 py-2" value="{{ old('result_note', $schedule->result_note) }}">
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Note</label>
        <textarea name="note" rows="3" class="w-full rounded-xl border px-3 py-2">{{ old('note', $schedule->note) }}</textarea>
      </div>

      <div class="pt-2">
        <button class="px-5 py-2.5 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700">Update</button>
      </div>
    </form>
  </div>
</x-app-layout>
