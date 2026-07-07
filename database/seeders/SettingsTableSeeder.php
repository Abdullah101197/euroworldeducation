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
            
            // Home Page
            ['key' => 'home_hero_title', 'value' => 'Study in Europe & <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-600">Shape Your Future</span>', 'type' => 'richtext', 'group' => 'home_page'],
            ['key' => 'home_hero_subtitle', 'value' => 'Expert guidance for university admissions, visa processing, and career counseling to help you achieve your dreams of studying abroad.', 'type' => 'textarea', 'group' => 'home_page'],
            
            // About Page
            ['key' => 'about_mission', 'value' => '<p>At Euro World Education, our mission is to empower students by providing transparent, ethical, and comprehensive guidance for studying abroad. We believe that global education transforms lives, and we strive to make this transformation accessible to everyone.</p>', 'type' => 'richtext', 'group' => 'about_page'],
            ['key' => 'about_vision', 'value' => '<p>To be the most trusted educational consultancy globally, recognized for our commitment to student success and our extensive network of top-tier university partnerships.</p>', 'type' => 'richtext', 'group' => 'about_page'],
        ];

        foreach ($settings as $setting) {
            \App\Models\Setting::firstOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
