<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'site_phone', 'value' => '+1234567890', 'type' => 'text', 'group' => 'contact'],
            ['key' => 'site_email', 'value' => 'info@euroworldeducation.com', 'type' => 'email', 'group' => 'contact'],
            ['key' => 'site_address', 'value' => '123 Education Lane, City, Country', 'type' => 'textarea', 'group' => 'contact'],
            ['key' => 'social_facebook', 'value' => 'https://facebook.com', 'type' => 'url', 'group' => 'social'],
            ['key' => 'social_twitter', 'value' => 'https://twitter.com', 'type' => 'url', 'group' => 'social'],
            ['key' => 'social_instagram', 'value' => 'https://instagram.com', 'type' => 'url', 'group' => 'social'],
            ['key' => 'social_linkedin', 'value' => 'https://linkedin.com', 'type' => 'url', 'group' => 'social'],
            ['key' => 'site_title', 'value' => 'EuroWorld Education', 'type' => 'text', 'group' => 'general'],
        ];

        foreach ($settings as $setting) {
            \App\Models\Setting::firstOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
