<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = \App\Models\Setting::all()->groupBy('group');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method']);
        
        // Handle file uploads safely without symlink dependencies
        if ($request->hasFile('site_logo')) {
            $file = $request->file('site_logo');
            if ($file->isValid()) {
                $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/logos'), $filename);
                \App\Models\Setting::updateOrCreate(
                    ['key' => 'site_logo'],
                    ['value' => 'uploads/logos/' . $filename]
                );
            }
        }
        // Always unset site_logo from $data so it doesn't get overwritten to null when saving other settings
        unset($data['site_logo']);

        foreach ($data as $key => $value) {
            \App\Models\Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        // Clear cache if we implement caching later
        // cache()->forget('settings');

        return back()->with('success', 'Settings updated successfully!');
    }
}
