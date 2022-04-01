<?php

namespace App\Controllers;

use App\Core\App;

class LocationsController {

    public function index () {

        $locations = App::get('database')->selectAll('locations');

        return view('locations', ['locations' => $locations]);
        
    }


    public function store () {

        App::get('database')->insert('locations', [
            'location' => $_POST['location'],
        ]);
        
        return redirect('locations');

    }

}