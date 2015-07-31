<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller {

    public function about() {
        $people = [
            'Tom', 'Tim', 'Kristjan'
        ];
        $people = [];
        return view('pages.about', compact('people'));
    }

    public function contact() {
        $first = 'Fox';
        $last = 'Fux';
        return view('pages.contact', compact('first', 'last'));
    }

}
