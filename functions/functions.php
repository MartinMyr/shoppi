<?php

    if(isset($_POST["add-list-name"])){
        $insert = new Add();
        $insert->insertList();
        echo '<script>window.location = "lists.php";</script>';
    }

    if(isset($_POST['add-item-name'])){
        if(!$_GET['id']){
            $_GET['id'] = $_POST['id'];
        }

        $insert = new Add();
        $insert->insertItem();
    }
