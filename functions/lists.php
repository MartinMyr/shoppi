<?php

class Lists extends Dbh{

    protected function getAllLists(){
       $sql = "SELECT * FROM lists";
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