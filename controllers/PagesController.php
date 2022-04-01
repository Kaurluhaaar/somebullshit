<?php

namespace App\Controllers;

use App\Core\App;

class PagesController {

    public function home () {

        $locations = App::get('database')->selectAll('locations');

        return view('index', ['locations' => $locations]);

    }

    public function about () {

        return view('about', ['organization' => 'Kuressaare Ametikool']);

    }

    public function contact () {

        return view('contact');

    }

}