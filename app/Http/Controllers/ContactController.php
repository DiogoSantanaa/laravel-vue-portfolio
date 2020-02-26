<?php

namespace App\Http\Controllers;

use App\Project;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('index', ['projects' => $projects]);
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:30',
        ]);

        $data = array(
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message'),
        );

        Mail::to('diogosantana1997@outlook.pt')
            ->send(new ContactMe($data));

        return redirect('/#Contact')->with('message', 'Your email was successfully sent!');
    }
}
