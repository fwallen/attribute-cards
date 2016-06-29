<?php

namespace App\Http\Controllers;

use App\Models\Words;
use Illuminate\Http\Request;

use App\Http\Requests;

class DefaultController extends Controller
{
    public function index(Request $request) {

        $wordCount = Words::count();

        return view('default.index',compact('wordCount'));
    }

    public function draw() {

        $wordCount = Words::count();
        $cards = [];
        for($i = 0; $i < 3; $i++) {
            $cards[] = Words::offset(rand(0,$wordCount - 1))->limit(1)->first();
        }

        return view('default.index',compact('wordCount','cards'));
    }
}
