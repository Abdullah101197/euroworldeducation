<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() 
    { 
        try {
            $scholarships = \App\Models\Scholarship::where('is_active', true)->orderBy('sort_order')->orderBy('id', 'asc')->get();
        } catch (\Exception $e) {
            $scholarships = collect();
        }
        return view('pages.index', compact('scholarships')); 
    }
    public function about() { return view('pages.about'); }
    public function services() { return view('pages.services'); }
    public function destinations() { return view('pages.destinations'); }
    public function scholarships() 
    { 
        try {
            $scholarships = \App\Models\Scholarship::where('is_active', true)->orderBy('sort_order')->orderBy('id', 'asc')->get();
        } catch (\Exception $e) {
            $scholarships = collect();
        }
        return view('pages.scholarships', compact('scholarships')); 
    }
    public function successStories() { return view('pages.success-stories'); }
    public function blog() 
    { 
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('posts')) {
                $posts = \App\Models\Post::with('category')->latest()->paginate(9);
                $popularPosts = \App\Models\Post::latest()->take(3)->get();
            } else {
                $posts = new \Illuminate\Pagination\LengthAwarePaginator([], 0, 9);
                $popularPosts = collect([]);
            }
        } catch (\Exception $e) {
            $posts = new \Illuminate\Pagination\LengthAwarePaginator([], 0, 9);
            $popularPosts = collect([]);
        }

        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('categories')) {
                $categories = \App\Models\Category::all();
            } else {
                $categories = collect([]);
            }
        } catch (\Exception $e) {
            $categories = collect([]);
        }

        return view('pages.blog', compact('posts', 'categories', 'popularPosts')); 
    }
    public function contact() { return view('pages.contact'); }

    public function submitContact(Request $request)
    {
        // Check if this is a WhatsApp Assessment submission
        if ($request->has('wa_full_name') || $request->input('lead_type') === 'whatsapp') {
            $name = trim($request->input('wa_full_name', 'Student Lead'));
            $dob = trim($request->input('wa_dob', 'N/A'));
            $qual = trim($request->input('wa_qualification_marks', 'N/A'));
            $interest = trim($request->input('wa_interest', 'General Study Advice'));
            $intake = trim($request->input('wa_intake', 'Earliest Possible Available'));

            \App\Models\Contact::create([
                'name' => $name,
                'email' => $request->input('email', 'whatsapp_lead@euroworldeducation.com'),
                'phone' => $request->input('phone', null),
                'subject' => 'WhatsApp Evaluation: ' . $interest,
                'message' => "📅 Date of Birth: {$dob}\n🎓 Qualification & Marks: {$qual}\n🌍 Target Destination: {$interest}\n🎯 Preferred Intake: {$intake}",
                'is_contacted' => false,
            ]);

            if ($request->wantsJson() || $request->ajax()) {
                return response()->json(['status' => 'success', 'message' => 'WhatsApp lead saved to admin!']);
            }
            return back()->with('success', 'Thank you, ' . $name . '! Your profile has been recorded.');
        }

        // Standard Email Form submission
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        \App\Models\Contact::create([
            'name' => trim($validated['first_name'] . ' ' . $validated['last_name']),
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'is_contacted' => false,
        ]);

        return back()->with('success', 'Thank you, ' . $validated['first_name'] . '! Your message has been received.');
    }
}
