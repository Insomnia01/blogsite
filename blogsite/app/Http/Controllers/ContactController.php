<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = new Contact;
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->mail = $request->input('mail');
        $data->message = $request->input('message');

        $data->save();
        return redirect()->route('contact');
    }
}
