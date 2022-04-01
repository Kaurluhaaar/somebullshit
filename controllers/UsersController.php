<?php

namespace App\Controllers;

use App\Core\App;

class UsersController {

    public function index () {

        $users = App::get('database')->selectAll('users');

        return view('users', ['users' => $users]);
        
    }


    public function store () {

        App::get('database')->insert('users', [
            'user' => $_POST['user'],
        ]);
        
        return redirect('users');

    }

}