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
}
