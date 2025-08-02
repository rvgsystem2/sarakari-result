<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function detail()
    {
        return view('frontend.detail');
    }

    public function latestjob()
    {
        return view('frontend.latestjob');
    }

    public function admit_card()
    {
        return view('frontend.admit_card');
    }

    public function admission()
    {
        return view('frontend.admission');
    }

    public function answerkey()
    {
        return view('frontend.answerkey');
    }

    public function constact()
    {
        return view('frontend.contact');
    }

    public function disclaimer()
    {
        return view('frontend.disclaimer');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }

    public function syllabus()
    {
        return view('frontend.syllabus');
    }

    public function result()
    {
        return view('frontend.result');
    }
}

