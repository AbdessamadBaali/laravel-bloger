<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PagesController extends Controller
{
    public function index() {
        return view("pages.index");
    }

    public function about() {
        return view('pages.about');
    }
    public function services() {
        $services = array(
            'services' => [
                'web design', 'programming', 'seo'
            ]
        );
        return view('pages.services')->with($services);
    }
    

}
