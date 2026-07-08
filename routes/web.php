<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/destinations', [PageController::class, 'destinations'])->name('destinations');
Route::get('/scholarships', [PageController::class, 'scholarships'])->name('scholarships');
Route::get('/success-stories', [PageController::class, 'successStories'])->name('success-stories');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/news', [PageController::class, 'blog'])->name('news');
Route::get('/news-and-updates', [PageController::class, 'blog'])->name('news-and-updates');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

Route::get('/dashboard', function () {
    $totalLeads = \App\Models\Contact::count();
    $unreadLeads = \App\Models\Contact::where('is_contacted', false)->count();
    $recentLeads = \App\Models\Contact::orderBy('created_at', 'desc')->take(5)->get();

    return view('dashboard', compact('totalLeads', 'unreadLeads', 'recentLeads'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/contacts', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contact}', [\App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::patch('/contacts/{contact}/toggle-status', [\App\Http\Controllers\Admin\ContactController::class, 'toggleStatus'])->name('contacts.toggle-status');

    Route::get('/settings', [\App\Http\Controllers\SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [\App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');

    Route::resource('/users', \App\Http\Controllers\Admin\UserController::class)->except(['show']);
    Route::resource('/posts', \App\Http\Controllers\PostController::class)->except(['show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Secure Deployment Webhook Route
Route::match(['get', 'post'], '/deploy-app', function (\Illuminate\Http\Request $request) {
    if ($request->query('token') !== 'euroworld123') {
        abort(403, 'Unauthorized');
    }
    
    // Run database migrations and seed default admin
    \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
    \Illuminate\Support\Facades\Artisan::call('db:seed', ['--force' => true]);
    
    // Clear caches
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    
    return response()->json(['message' => 'Deployment, Migrations & Seeding Successful!']);
});
