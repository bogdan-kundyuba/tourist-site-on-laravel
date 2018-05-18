<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {

    public function create()
    {
        return view('contact.create');
    }

    public function show()
    {
        return view('contact.show');
    }

    public function store()
    {
//        return request()->all();
        
        $this->validate(request(), [
            'name' => 'required|max:10',
            'email' => 'required',
            'phone' => 'required',
            'body' => 'required'
        ]);

        Contact::create(request(['name', 'email', 'phone', 'body']));

        return redirect('/');
    }
}
