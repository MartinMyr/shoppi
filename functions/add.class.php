<?php

class Add extends Dbh
{
    public $name;
    public $color;
    public $id;


    public function insertList(){
        $this->name = $_POST['add-list-name'];
        $this->color = $_POST['add-list-color'];
        $sql = "INSERT INTO lists (name, color) VALUES ('$this->name', '$this->color')";
        $result = $this->connect()->query($sql);
        if($result){
            return $result;
        }else{
            return false;
        }

    }


    public function insertItem(){
        $this->name = $_POST['add-item-name'];
        $this->id = $_GET['id'];
        $sql = "INSERT INTO list (item, lists_id) VALUES ('$this->name', ' $this->id')";
        $result = $this->connect()->query($sql);
        if($result){
            return $result;
        }else{
            return false;
        }

    }
}