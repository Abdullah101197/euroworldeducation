<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('scholarships') && !Schema::hasColumn('scholarships', 'slug')) {
            Schema::table('scholarships', function (Blueprint $table) {
                $table->string('slug')->unique()->after('title')->nullable();
            });
            
            // Populate slugs for existing records
            $scholarships = \App\Models\Scholarship::all();
            foreach ($scholarships as $scholarship) {
                $scholarship->slug = \Illuminate\Support\Str::slug($scholarship->title);
                $scholarship->save();
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scholarships', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
