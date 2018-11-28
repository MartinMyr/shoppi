<?php

class SingleList extends Dbh{
    public $id;
    protected function getList(){
        $this->id = $_GET['id'];;
        $sql = "SELECT * FROM list AS l JOIN lists AS li ON l.lists_id=li.id WHERE l.lists_id =  $this->id";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows>0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
}