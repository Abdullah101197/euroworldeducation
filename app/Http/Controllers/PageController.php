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
    
    public function destinationDetail($slug)
    {
        try {
            $destination = \App\Models\Destination::where('slug', $slug)->orWhere('id', $slug)->firstOrFail();
            return view('pages.destination-detail', compact('destination'));
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function scholarships() 
    { 
        try {
            $scholarships = \App\Models\Scholarship::where('is_active', true)->orderBy('sort_order')->orderBy('id', 'asc')->get();
        } catch (\Exception $e) {
            $scholarships = collect();
        }
        return view('pages.scholarships', compact('scholarships')); 
    }

    public function scholarshipDetail($slug)
    {
        try {
            $scholarship = \App\Models\Scholarship::where('slug', $slug)->orWhere('id', $slug)->firstOrFail();
            return view('pages.scholarship-detail', compact('scholarship'));
        } catch (\Exception $e) {
            abort(404);
        }
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
        // Check if this is an Eligibility Check / WhatsApp Assessment submission
        if ($request->has('wa_full_name') || $request->input('lead_type') === 'whatsapp' || $request->input('lead_type') === 'admin_form') {
            $name = trim($request->input('wa_full_name', 'Student Lead'));
            $city = trim($request->input('wa_city', 'N/A'));
            $age = trim($request->input('wa_age', 'N/A'));
            $qual = trim($request->input('wa_qualification_marks', 'N/A'));
            $interest = trim($request->input('wa_interest', 'General Study Advice'));
            $phone = trim($request->input('wa_phone', 'N/A'));
            $email = trim($request->input('wa_email', 'N/A'));

            $messageContent = "🏙️ City Name: {$city}\n" .
                              "🎂 Age: {$age} Years\n" .
                              "🎓 Last Degree, CGPA / Marks & Passing Year: {$qual}\n" .
                              "🌍 Target Destination: {$interest}\n" .
                              "📞 Phone Number: {$phone}\n" .
                              "✉️ Email Address: {$email}";

            \App\Models\Contact::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => 'Eligibility Check: ' . $interest,
                'message' => $messageContent,
                'is_contacted' => false,
            ]);

            if ($request->wantsJson() || $request->ajax() || $request->input('lead_type') === 'whatsapp') {
                return response()->json(['status' => 'success', 'message' => 'Lead successfully saved to Admin Panel!']);
            }
            return back()->with('success', 'Thank you, ' . $name . '! Your eligibility check profile has been successfully submitted to our Admin Panel.');
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

    public function feedback() { return view('pages.feedback'); }

    public function submitFeedback(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'rating' => 'required|integer|min:1|max:5',
            'category' => 'required|string|max:100',
            'message' => 'required|string',
        ]);

        \App\Models\Feedback::create([
            'name' => trim($validated['name']),
            'email' => $validated['email'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'rating' => (int) $validated['rating'],
            'category' => $validated['category'],
            'message' => $validated['message'],
            'is_reviewed' => false,
        ]);

        return back()->with('success', 'Thank you for your valuable feedback! We truly appreciate your input.');
    }
}
