<?php

namespace App;

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Test (database and table needs to exist before this works)
    public function getUsers()
    {
        $this->db->query("SELECT * FROM Users");
        $result = $this->db->resultSet();
        return $result;
    }
    public function signIn($email, $password)
    {
        $this->db->query("SELECT `user_id`,`name`,`email` FROM `Users` WHERE `email`='$email' AND `password` = '$password'");
        $result = $this->db->resultSet();
        return json_encode($result);
    }
    public function validateEmail($email)
    {
        $this->db->query("SELECT `user_id` FROM `Users` WHERE `email`='$email'");
        $result = $this->db->resultSet();
        return json_encode($result);
    }
    public function addUser($name, $email, $password, $role)
    {
        $this->db->query("INSERT INTO Users( `name`, `email`, `password`, `role`)VALUES ('$name','$email','$password','$role')");
        $result = $this->db->addUser();
        return json_encode(array('added'));
    }
}
