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
        
        // Handle file uploads
        if ($request->hasFile('site_logo')) {
            $path = $request->file('site_logo')->store('logos', 'public');
            \App\Models\Setting::updateOrCreate(
                ['key' => 'site_logo'],
                ['value' => 'storage/' . $path]
            );
            unset($data['site_logo']);
        }

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
