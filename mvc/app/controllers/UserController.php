<?php

namespace userC;

class UserController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $users = $this->model->getUsers();

        include "app/views/user_list.php";
    }

    public function insertForm()
    {
        include "app/views/insertForm.php";
    }

    public function createUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $type = $_POST['type'];

        $data = [
            "email" => "$email",
            "password" => "$password",
            "type" => "$type"
        ];

        $insert = $this->model->insertUsers($data);
        header("location:/index.php");
    }

    public function updateForm()
    {
        include "app/views/edit.php";
    }

    public function update()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $type = $_POST['type'];
        $data = array();

        if (!empty($email)) {
            $data['email'] = $email;
        }

        if (!empty($password)) {
            $data['password'] = $password;
        }

        if (!empty($type)) {
            $data['type'] = $type;
        }

        if (!empty($data)) {
            $id = $_GET["id"];
            $this->model->updateUsers($data, $id);
        }

        header("location:../index.php");
    }

    public function deleteForm()
    {
        include "app/views/delete.php";
    }

    public function delete()
    {
        $id = $_GET["id"];
        $this->model->deleteUsers($id);
        header("location: index.php");
    }
    
}
