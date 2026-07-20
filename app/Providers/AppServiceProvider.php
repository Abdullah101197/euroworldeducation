<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            // Auto create scholarships table on live environments if not yet migrated
            if (!\Illuminate\Support\Facades\Schema::hasTable('scholarships')) {
                \Illuminate\Support\Facades\Schema::create('scholarships', function (\Illuminate\Database\Schema\Blueprint $table) {
                    $table->id();
                    $table->string('title');
                    $table->string('badge')->nullable();
                    $table->string('highlight')->nullable();
                    $table->string('icon')->default('fa-award');
                    $table->string('color_theme')->default('yellow');
                    $table->text('description');
                    $table->string('button_text')->default('Check Your Eligibility');
                    $table->string('button_link')->default('/contact');
                    $table->integer('sort_order')->default(0);
                    $table->boolean('is_active')->default(true);
                    $table->timestamps();
                });
            }

            // Seed default scholarships if table is empty
            if (\App\Models\Scholarship::count() === 0) {
                \App\Models\Scholarship::create([
                    'title' => 'Merit-Based Excellence Awards',
                    'badge' => 'Academic Excellence',
                    'highlight' => '• Up to 50% Tuition Coverage',
                    'icon' => 'fa-award',
                    'color_theme' => 'yellow',
                    'description' => '<p>Many of our partner universities in the UK and Australia offer significant tuition fee discounts (up to 50%) for students with outstanding academic records.</p>',
                    'button_text' => 'Check Your Eligibility',
                    'button_link' => '/contact',
                    'sort_order' => 1,
                    'is_active' => true,
                ]);

                \App\Models\Scholarship::create([
                    'title' => 'Government & Regional Scholarships',
                    'badge' => 'Public & Regional Grants',
                    'highlight' => '• Full Tuition + Stipend',
                    'icon' => 'fa-landmark',
                    'color_theme' => 'red',
                    'description' => '<p>We specialize in helping students apply for regional government scholarships (such as DSU in Italy or DAAD in Germany) which can cover full tuition and provide living stipends.</p>',
                    'button_text' => 'Apply For Funding Guidance',
                    'button_link' => '/contact',
                    'sort_order' => 2,
                    'is_active' => true,
                ]);
            }
        } catch (\Exception $e) {
            // Safe fallback during early boot stages
        }

        try {
            $settings = \App\Models\Setting::all()->pluck('value', 'key');
            \Illuminate\Support\Facades\View::share('global_settings', $settings);
            
            $global_destinations = \App\Models\Destination::where('is_active', true)->orderBy('sort_order')->get();
            \Illuminate\Support\Facades\View::share('global_destinations', $global_destinations);

            $global_scholarships = \App\Models\Scholarship::where('is_active', true)->orderBy('sort_order')->get();
            \Illuminate\Support\Facades\View::share('global_scholarships', $global_scholarships);

            $global_contact_numbers = \App\Models\ContactNumber::orderBy('sort_order')->get();
            $global_whatsapp_numbers = $global_contact_numbers->where('type', 'whatsapp');
            $global_phone_numbers = $global_contact_numbers->where('type', 'phone');
            \Illuminate\Support\Facades\View::share('global_whatsapp_numbers', $global_whatsapp_numbers);
            \Illuminate\Support\Facades\View::share('global_phone_numbers', $global_phone_numbers);
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\View::share('global_settings', collect());
            \Illuminate\Support\Facades\View::share('global_destinations', collect());
            \Illuminate\Support\Facades\View::share('global_scholarships', collect());
            \Illuminate\Support\Facades\View::share('global_whatsapp_numbers', collect());
            \Illuminate\Support\Facades\View::share('global_phone_numbers', collect());
        }
    }
}
