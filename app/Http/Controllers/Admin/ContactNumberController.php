<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactNumber;
use Illuminate\Http\Request;

class ContactNumberController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:whatsapp,phone',
            'label' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $validated['sort_order'] = $validated['sort_order'] ?? (ContactNumber::where('type', $validated['type'])->max('sort_order') + 1);

        ContactNumber::create($validated);

        return redirect()->route('admin.settings.index', ['tab' => 'contact_widgets'])
            ->with('success', ucfirst($validated['type']) . ' number added successfully!');
    }

    public function update(Request $request, ContactNumber $contact_number)
    {
        $validated = $request->validate([
            'type' => 'required|in:whatsapp,phone',
            'label' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $contact_number->update($validated);

        return redirect()->route('admin.settings.index', ['tab' => 'contact_widgets'])
            ->with('success', ucfirst($validated['type']) . ' number updated successfully!');
    }

    public function destroy(ContactNumber $contact_number)
    {
        $type = $contact_number->type;
        $contact_number->delete();

        return redirect()->route('admin.settings.index', ['tab' => 'contact_widgets'])
            ->with('success', ucfirst($type) . ' number deleted successfully.');
    }
}
