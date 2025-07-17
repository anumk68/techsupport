<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.list', compact('contact'));
    }

    public function delete($id)
    {
        $data = Contact::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Contact deleted successfully');
    }

}
