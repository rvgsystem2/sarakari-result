<?php

namespace App\Http\Controllers;

use App\Models\Schedule;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
            public function index() {
                $schedules = Schedule::latest()->get();
                return view('backend.schedule.index', compact('schedules'));
            }

            public function create() {
                return view('backend.schedule.create');
            }

            public function store(Request $request) {
                $data = $this->validateRequest($request);
                Schedule::create($data);
                return redirect()->route('schedule.index')->with('success','Record created successfully!');
            }

            public function edit(Schedule $schedule) {
                return view('backend.schedule.edit', compact('schedule'));
            }

            public function update(Request $request, Schedule $schedule) {
                $data = $this->validateRequest($request);
                $schedule->update($data);
                return redirect()->route('schedule.index')->with('success','Record updated successfully!');
            }

            public function destroy(Schedule $schedule) {
                $schedule->delete();
                return back()->with('success','Record deleted.');
            }

            private function validateRequest($r) {
                return $r->validate([
                    'apply_start_date' => 'nullable|date',
                    'apply_last_date' => 'nullable|date',
                    'fee_last_date' => 'nullable|date',
                    'correction_start_date' => 'nullable|date',
                    'correction_end_date' => 'nullable|date',
                    'exam_date' => 'nullable|string|max:255',
                    'admit_card' => 'nullable|string|max:255',
                    'result_date' => 'nullable|string|max:255',
                    'note' => 'nullable|string',
                ]);
            }



}
