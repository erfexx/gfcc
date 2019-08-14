<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function berandaPage()
    {
        $page = 'home';
        return view('user_view.home', compact('page'));
    }

    public function blogPage()
    {
        $page = 'blog';
        return view('user_view.single_blog', compact('page'));
    }

    public function getJoin()
    {
        $page = 'join';
        return view('user_view.join', compact('page'));
    }

    public function postJoin(Request $request)
    {

    }

}
