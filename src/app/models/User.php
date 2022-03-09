<?php

namespace App;

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * getUsers()
     * function to get users from db
     *
     * @return void
     */
    public function getUsers()
    {
        $this->db->query("SELECT * FROM Users");
        $result = $this->db->resultSet();
        return json_encode($result);
    }

    /**
     * signin()
     *function to login user
     * @param [type] $email
     * @param [type] $password
     * @return void
     */
    public function signIn($email, $password)
    {
        $this->db->query("SELECT `user_id`,`name`,`email`,`role` FROM `Users`
         WHERE `email`='$email' AND `password` = '$password'");
        $result = $this->db->resultSet();
        return json_encode($result);
    }

    /**
     * validateEmail()
     * function to validate email
     *
     * @param [type] $email
     * @return void
     */
    public function validateEmail($email)
    {
        $this->db->query("SELECT `user_id` FROM `Users` WHERE `email`='$email'");
        $result = $this->db->resultSet();
        return json_encode($result);
    }

    /**
     * addUser()
     * function to add user
     *
     * @param [type] $name
     * @param [type] $email
     * @param [type] $password
     * @param [type] $role
     * @return void
     */
    public function addUser($name, $email, $password, $role)
    {
        $this->db->query("INSERT INTO Users( `name`, `email`, `password`, `role`,`status`)
        VALUES ('$name','$email','$password','$role','restricted')");
        $result = $this->db->execQuery();
        return json_encode(array('added'));
    }

    /**
     * deleteUser()
     * function to delete user
     *
     * @param [type] $user_id
     * @return void
     */
    public function deleteUser($user_id)
    {
        $this->db->query(" DELETE FROM `Users` WHERE `user_id`='$user_id'");
        $result = $this->db->execQuery();
        return json_encode(array('deleted'));
    }

    /**
     * updateUserStatus()
     * function to update user status
     *
     * @param [type] $status
     * @param [type] $user_id
     * @param [type] $column
     * @return void
     */
    public function updateUserStatus($status, $user_id, $column)
    {
        $this->db->query("UPDATE `Users` SET `$column`='$status' WHERE user_id='$user_id'");
        $result = $this->db->execQuery();
        return json_encode(array('updated'));
    }
}
