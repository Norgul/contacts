<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class FavouriteContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::where('favourite', 1)->get();
        return view('contacts.index', compact('contacts'));
    }
    public function update(Contact $contact)
    {
        $contact->update(['favourite' => !$contact->favourite]);
        return back();
    }
}
