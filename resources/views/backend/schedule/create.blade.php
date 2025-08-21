<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Important Dates</h2>
    </x-slot>
  <div class="max-w-3xl mx-auto p-6">
    <div class="mb-6 flex items-center justify-between">
      <h1 class="text-2xl font-bold">Create Schedule</h1>
      <a href="{{ route('schedule.index') }}" class="text-indigo-700 hover:underline">← Back</a>
    </div>

    <form action="{{ route('schedule.store') }}" method="POST" class="bg-white rounded-2xl shadow p-6 space-y-5">
      @csrf

 
      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1">Apply Online Start Date</label>
          <input name="apply_start_date" type="date" class="w-full rounded-xl border px-3 py-2" value="2025-08-01">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Apply Online Last Date</label>
          <input name="apply_last_date" type="date" class="w-full rounded-xl border px-3 py-2" value="2025-08-31">
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Last Date For Fee Payment</label>
        <input name="fee_last_date" type="date" class="w-full rounded-xl border px-3 py-2" value="2025-08-31">
      </div>

      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1">Correction Start Date</label>
          <input name="correction_start_date" type="date" class="w-full rounded-xl border px-3 py-2" value="2025-09-03">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Correction End Date</label>
          <input name="correction_end_date" type="date" class="w-full rounded-xl border px-3 py-2" value="2025-09-05">
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Exam Date (optional)</label>
        <input name="exam_date" type="text" class="w-full rounded-xl border px-3 py-2" placeholder="Notify Later">
      </div>

      <div class="grid md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium mb-1">Admit Card</label>
          <input name="admit_card_note" type="text" class="w-full rounded-xl border px-3 py-2" value="Before Exam">
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Result</label>
          <input name="result_note" type="text" class="w-full rounded-xl border px-3 py-2" value="Will Be Updated Here Soon">
        </div>
      </div>

      <div>
        <label class="block text-sm font-medium mb-1">Note</label>
        <textarea name="note" rows="3" class="w-full rounded-xl border px-3 py-2" placeholder="Candidates are advised to confirm from the CCRAS official website."></textarea>
      </div>

      <div class="pt-2">
        <button class="px-5 py-2.5 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700">Save</button>
      </div>
    </form>
  </div>

</x-app-layout>
