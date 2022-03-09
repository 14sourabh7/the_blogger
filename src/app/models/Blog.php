<?php

namespace App;

class Blog
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * getBlogs()
     * function to get blogs from db
     *
     * @return void
     */
    public function getBlogs()
    {
        $this->db->query("SELECT * FROM `blogs` WHERE 1");
        $result = $this->db->resultSet();
        return json_encode($result);
    }

    /**
     * getBlog()
     * function to get single blog from db
     *
     * @param [type] $blog_id
     * @return void
     */
    public function getBlog($blog_id)
    {
        $this->db->query("SELECT * FROM `blogs` WHERE blog_id='$blog_id'");
        $result = $this->db->resultSet();
        return json_encode($result);
    }

    /**
     * getUserBlog()
     * function to get blog filtered by user
     *
     * @param [type] $user_id
     * @return void
     */
    public function getUserBlog($user_id)
    {
        $this->db->query("SELECT * FROM `blogs` WHERE user_id='$user_id'");
        $result = $this->db->resultSet();
        return json_encode($result);
    }

    /**
     * addBlog()
     * function to add blog
     * @param [type] $user_id
     * @param [type] $title
     * @param [type] $author
     * @param [type] $text
     * @param [type] $status
     * @return void
     */
    public function addBlog($user_id, $title, $author, $text, $status)
    {
        $this->db->query("INSERT INTO `blogs`(`user_id`, `title`, `author`,`text`, `status`)
         VALUES ('$user_id','$title','$author','$text','$status')");
        $result = $this->db->execQuery();
        return json_encode($result);
    }

    /**
     * updateBlogStatus
     * function to updateBlog status
     *
     * @param [type] $status
     * @param [type] $blog_id
     * @param [type] $column
     * @return void
     */
    public function updateBlogStatus($status, $blog_id, $column)
    {
        $this->db->query("UPDATE `blogs` SET `$column`='$status' WHERE blog_id='$blog_id'");
        $result = $this->db->execQuery();
        return json_encode(array('updated'));
    }

    /**
     * updateBlog
     * function to update blog
     *
     * @param [type] $title
     * @param [type] $text
     * @param [type] $blog_id
     * @return void
     */
    public function updateBlog($title, $text, $blog_id)
    {
        $this->db->query("UPDATE `blogs` SET `title`='$title', `text`='$text' WHERE `blog_id`='$blog_id'");
        $result = $this->db->execQuery();
        return json_encode(array('blog updated'));
    }

    /**
     * deleteBlog()
     * function to delete blog
     *
     * @param [type] $blog_id
     * @return void
     */
    public function deleteBlog($blog_id)
    {
        $this->db->query(" DELETE FROM `blogs` WHERE `blog_id`='$blog_id'");
        $result = $this->db->execQuery();
        return json_encode(array('deleted'));
    }
}
