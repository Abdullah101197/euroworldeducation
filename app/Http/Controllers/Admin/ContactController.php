<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function toggleStatus(Contact $contact)
    {
        $contact->update(['is_contacted' => !$contact->is_contacted]);
        return back()->with('success', 'Contact status updated successfully!');
    }
}
