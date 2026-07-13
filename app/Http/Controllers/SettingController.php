<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $settings = \App\Models\Setting::all()->groupBy('group');
        $flatSettings = \App\Models\Setting::all()->pluck('value', 'key');
        
        try {
            $scholarships = \App\Models\Scholarship::orderBy('sort_order')->orderBy('id', 'asc')->get();
        } catch (\Exception $e) {
            $scholarships = collect();
        }

        $defaultTab = $request->get('tab', 'global');

        return view('admin.settings.index', compact('settings', 'flatSettings', 'scholarships', 'defaultTab'));
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
                    ['value' => 'uploads/logos/' . $filename, 'group' => 'general']
                );
            }
        }
        // Always unset site_logo from $data so it doesn't get overwritten to null when saving other settings
        unset($data['site_logo']);

        if ($request->hasFile('home_hero_image')) {
            $file = $request->file('home_hero_image');
            if ($file->isValid()) {
                $filename = 'hero_' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/hero'), $filename);
                \App\Models\Setting::updateOrCreate(
                    ['key' => 'home_hero_image'],
                    ['value' => 'uploads/hero/' . $filename, 'group' => 'home_page']
                );
            }
        }
        unset($data['home_hero_image']);

        foreach ($data as $key => $value) {
            $group = 'general';
            if (str_starts_with($key, 'home_')) $group = 'home_page';
            elseif (str_starts_with($key, 'about_')) $group = 'about_page';
            elseif (str_starts_with($key, 'scholarships_')) $group = 'scholarships_page';
            elseif (str_starts_with($key, 'services_')) $group = 'services_page';
            elseif (str_starts_with($key, 'destinations_')) $group = 'destinations_page';
            elseif (str_starts_with($key, 'social_')) $group = 'social';
            elseif (in_array($key, ['site_phone', 'site_whatsapp', 'site_email', 'site_address'])) $group = 'contact';

            \App\Models\Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value, 'group' => $group]
            );
        }

        return back()->with('success', 'Settings updated successfully!');
    }
}
