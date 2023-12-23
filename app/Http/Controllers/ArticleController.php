<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //show article
    public function show() {
        return view('article');
    }
}
