<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::latest()->paginate(10);
        return view('staffs.index', compact('teachers'));
    }

    public function create()
    {
        return view('staffs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'tel' => 'nullable|string|max:50',
        ]);

        Teacher::create($validated);

        return redirect()->route('staffs.index')->with('success', 'Teacher created successfully.');
    }

    public function show(Teacher $staff)
    {
        // Note: route-model binding will use {staff} param because resource name is staffs
        return view('staffs.show', ['teacher' => $staff]);
    }

    public function edit(Teacher $staff)
    {
        return view('staffs.edit', ['teacher' => $staff]);
    }

    public function update(Request $request, Teacher $staff)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'tel' => 'nullable|string|max:50',
        ]);

        $staff->update($validated);

        return redirect()->route('staffs.index')->with('success', 'Teacher updated successfully.');
    }

    public function destroy(Teacher $staff)
    {
        $staff->delete();
        return redirect()->route('staffs.index')->with('success', 'Teacher deleted successfully.');
    }
}
