<?php
namespace userM;
class UserModel{
    private $db;

    public function __construct($db)
    {
        $this->db=$db;
    }

    public function getUsers(){
        return $this->db->get("users");
    }

    public function insertUsers($data){
        $this->db->insert('users', $data);
    }

    public function updateUsers($data,$id){
        $this->db->where("id",$id);
        $this->db->update("users",$data);
    }

    public function deleteUsers($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("users");
    }
}