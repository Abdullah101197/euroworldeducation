<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'badge' => 'nullable|string|max:255',
            'highlight' => 'nullable|string|max:255',
            'icon' => 'required|string|max:255',
            'color_theme' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $validated['button_text'] = $validated['button_text'] ?: 'Check Your Eligibility';
        $validated['button_link'] = $validated['button_link'] ?: '/contact';
        $validated['sort_order'] = $validated['sort_order'] ?? (Scholarship::max('sort_order') + 1);

        Scholarship::create($validated);

        return redirect()->route('admin.settings.index', ['tab' => 'scholarships'])
            ->with('success', 'New Scholarship Box created successfully!');
    }

    public function update(Request $request, Scholarship $scholarship)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'badge' => 'nullable|string|max:255',
            'highlight' => 'nullable|string|max:255',
            'icon' => 'required|string|max:255',
            'color_theme' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $validated['button_text'] = $validated['button_text'] ?: 'Check Your Eligibility';
        $validated['button_link'] = $validated['button_link'] ?: '/contact';

        $scholarship->update($validated);

        return redirect()->route('admin.settings.index', ['tab' => 'scholarships'])
            ->with('success', 'Scholarship Box updated successfully!');
    }

    public function destroy(Scholarship $scholarship)
    {
        $scholarship->delete();

        return redirect()->route('admin.settings.index', ['tab' => 'scholarships'])
            ->with('success', 'Scholarship Box deleted successfully.');
    }
}
