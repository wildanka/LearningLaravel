<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//untuk halaman statis saja (home, about, student, faq, etc.)
class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['nama' => 'Wildan Kurniadi']);
    }
}
