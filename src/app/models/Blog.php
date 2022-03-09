<?php

namespace App;

class Blog
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getBlogs()
    {
        $this->db->query("SELECT * FROM `blogs` WHERE 1");
        $result = $this->db->resultSet();
        return json_encode($result);
    }
    public function getBlog($blog_id)
    {
        $this->db->query("SELECT * FROM `blogs` WHERE blog_id='$blog_id'");
        $result = $this->db->resultSet();
        return json_encode($result);
    }
    public function addBlog($user_id, $title, $author, $text, $status)
    {
        $this->db->query("INSERT INTO `blogs`(`user_id`, `title`, `author`,`text`, `status`)
         VALUES ('$user_id','$title','$author','$text','$status')");
        $result = $this->db->execQuery();
        return json_encode($result);
    }
    public function updateBlogStatus($status, $blog_id, $column)
    {
        $this->db->query("UPDATE `blogs` SET `$column`='$status' WHERE blog_id='$blog_id'");
        $result = $this->db->execQuery();
        return json_encode(array('updated'));
    }
    public function updateBlog($title, $text, $blog_id)
    {
        $this->db->query("UPDATE `blogs` SET `title`='$title', `text`='$text' WHERE `blog_id`='$blog_id'");
        $result = $this->db->execQuery();
        return json_encode(array('blog updated'));
    }
    public function deleteBlog($blog_id)
    {
        $this->db->query(" DELETE FROM `blogs` WHERE `blog_id`='$blog_id'");
        $result = $this->db->execQuery();
        return json_encode(array('deleted'));
    }
}
