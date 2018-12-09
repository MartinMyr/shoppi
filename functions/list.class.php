<?php

class SingleList extends Dbh{
    public $id;
    protected function getList(){
        $this->id = $_GET['id'];
        $sql = "SELECT * FROM lists AS li JOIN list AS l ON li.id=l.lists_id WHERE li.id =  $this->id ORDER BY l.selected";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
    public function updateList(){
        $this->id = $_POST['id'];
        $this->selected =$_POST['selected'];
        $sql = "UPDATE list SET selected = $this->selected WHERE id = $this->id";
        $this->connect()->query($sql);
    }
}