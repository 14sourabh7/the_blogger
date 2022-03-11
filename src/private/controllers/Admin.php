<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Admin extends Controller
{
    public function index()
    {
        $this->view('/pages/dashboard');
    }
}
