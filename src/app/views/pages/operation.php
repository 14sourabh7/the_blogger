<?php
session_start();

use App\Blog;
use App\User;

if (isset($_POST)) {
    $user = new User();
    $blog = new Blog();
    $action = $_POST['action'];
    switch ($action) {

        case 'signin':
            $result = $user->signin($_POST['email'], $_POST['password']);
            $_SESSION['user'] = $result;
            echo $result;
            break;
        case 'validateEmail':
            $result = $user->validateEmail($_POST['email']);
            echo $result;
            break;
        case 'addUser':
            echo $user->addUser($_POST['name'], $_POST['email'], $_POST['password'], 'user');
            break;
        case 'getUsers':
            echo $user->getUsers();
            break;
        case 'deleteUser':
            echo $user->deleteUser($_POST['user_id']);
            break;
        case 'updateStatus':
            echo $user->updateUserStatus($_POST['status'], $_POST['user_id'], $_POST['column']);
            break;
            // blogs
        case 'getBlogs':
            echo $blog->getBlogs();
            break;
        case 'getBlog':
            echo $blog->getBlog($_POST['blog_id']);
            break;
        case 'getUserBlog':
            echo $blog->getUserBlog($_POST['user_id']);
            break;
        case 'addBlog':
            echo $blog->addBlog($_POST['user_id'], $_POST['title'], $_POST['author'], $_POST['text'], $_POST['status']);
            break;
        case 'updateBlogStatus':
            echo $blog->updateBlogStatus($_POST['status'], $_POST['blog_id'], $_POST['column']);
            break;
        case 'updateBlog':
            echo $blog->updateBlog($_POST['title'], $_POST['text'], $_POST['blog_id']);
            break;
        case 'deleteBlog':
            echo $blog->deleteBlog($_POST['blog_id']);
            break;
    }
}
