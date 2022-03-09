<?php

// namespace App;

use App\Controller;
use App\User;

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $user = new User();
        $data = $user->getUsers();
        $this->view('/pages/index', $data);
    }
    public function authentication()
    {
        $this->view('/pages/authentication');
    }
    public function singleBlog()
    {
        $this->view('/pages/singleBlog');
    }
    public function dashboard()
    {
        $this->view('/pages/dashboard');
    }
    public function signup()
    {
        $this->view('/pages/signup');
    }
    public function operation()
    {
        $this->view('/pages/operation');
    }
}
