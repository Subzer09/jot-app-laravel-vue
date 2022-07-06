<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'company' => 'required',
        ]);

        Contact::create($data);
    }
}