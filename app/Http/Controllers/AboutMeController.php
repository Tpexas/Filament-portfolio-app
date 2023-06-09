<?php

namespace App\Http\Controllers;

use App\Models\AuthorInfo;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show()
    {
        $author = AuthorInfo::first();
        return view('about_me.show', compact('author'));
    }
}
