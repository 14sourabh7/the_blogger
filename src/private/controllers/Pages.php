<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Pages extends Controller
{
    public function index()
    {

        $this->view('/pages/index');
    }
    public function authentication()
    {
        $this->view('/pages/authentication');
    }
    public function viewBlog()
    {
        $this->view('/pages/viewBlog');
    }

    public function signup()
    {
        $this->view('/pages/signup');
    }
    public function addNewUser()
    {
        $this->view('/pages/addNewUser');
    }
    public function operation()
    {

        if (isset($_POST)) {
            $action = $_POST['action'];
            switch ($action) {

                case 'signin':
                    $data = $this->model('Users')::find_all_by_email_and_password($_POST['email'], $_POST['password']);
                    break;
                case 'validateEmail':
                    $data = $this->model('Users')::find('all', array('conditions' => array('email = ?', $_POST['email'])));
                    break;
                case 'addUser':
                    $user = $this->model('Users');
                    $user->name = $_POST['name'];
                    $user->email = $_POST['email'];
                    $user->password = $_POST['password'];
                    $user->role = 'user';
                    $user->status = 'resrtricted';
                    $user->save();
                    $data = $this->model('Users')::find('all', array('conditions' => array('email = ?', $_POST['email'])));
                    break;
                case 'getUsers':
                    $data = $this->model('Users')::all();
                    break;
                case 'deleteUser':
                    $id = $_POST['user_id'];
                    $user = $this->model('Users');
                    $user::table()->delete(array('user_id' => array($id)));
                    $data = $this->model('Users')::all();
                    break;
                case 'updateStatus':
                    $id = $_POST['user_id'];
                    $status = $_POST['status'];
                    $column = $_POST['column'];
                    $user  = $this->model('Users')::find_by_user_id($id);
                    $user->$column = $status;
                    $user->save();

                    $data = $this->model('Users')::all();
                    break;
                    // blogs
                case 'getBlogs':
                    $data = $this->model('Blogs')::all();
                    break;
                case 'getBlog':
                    $data = $this->model('Blogs')::find('all', array('conditions' => array('blog_id = ?', $_POST['blog_id'])));
                    break;
                case 'getUserBlog':
                    $data = $this->model('Blogs')::find('all', array('conditions' => array('blog_id = ?', $_POST['user_id'])));
                    break;
                case 'addBlog':
                    $blog = $this->model('Blogs');
                    $blog->user_id = $_POST['user_id'];
                    $blog->title = $_POST['title'];
                    $blog->author = $_POST['author'];
                    $blog->text = $_POST['text'];
                    $blog->status = $_POST['status'];
                    $blog->save();
                    $data = $this->model('Blogs')::all();
                    break;
                case 'updateBlogStatus':
                    $id = $_POST['blog_id'];
                    $column = $_POST['column'];
                    $status = $_POST['status'];
                    $blog  = $this->model('Blogs')::find_by_blog_id($id);
                    $blog->$column = $status;
                    $blog->save();
                    $data = $this->model('Blogs')::all();
                    break;
                case 'updateBlog':
                    $blog_id = $_POST['blog_id'];
                    $title = $_POST['title'];
                    $text = $_POST['text'];
                    $blog  = $this->model('Blogs')::find_by_blog_id($blog_id);
                    $blog->title = $title;
                    $blog->text = $text;
                    $blog->save();
                    $data = $this->model('Blogs')::all();
                    break;
                case 'deleteBlog':
                    $id = $_POST['blog_id'];
                    $user = $this->model('Blogs');
                    $user::table()->delete(array('blog_id' => array($id)));
                    $data = $this->model('Blogs')::all();
                    break;
                    break;
            }
        }
        $this->view('/pages/operation', $data);
    }
}
