<?php

namespace App\Http\Controllers;

use App\DataTables\ContactDataTable;
use App\Http\Requests\Contacts\SendContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(ContactDataTable $dataTable)
    {
        return $dataTable->render('contacts.index');
    }

    public function form()
    {
        return view('frontend.contact');
    }

    public function send(SendContactRequest $request)
    {
        Contact::create($request->validated());

        return response()->json([
            'message' => trans('messages.success.sent', ['type' => trans('general.email')])
        ]);
    }
}
