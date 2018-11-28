<?php

class Common extends Dbh{
    protected function getCommon(){
        $sql = "SELECT item FROM list GROUP BY item HAVING COUNT(item) > 1";
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