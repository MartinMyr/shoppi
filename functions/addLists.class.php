<?php

class AddLists extends Dbh
{
    public $name;
    public $color;


    public function insert(){
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

}