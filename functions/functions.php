<?php

    if(isset($_POST["add-list-name"])){
        $insert = new AddLists();
        $insert->insert();
        echo '<script>window.location = "lists.php";</script>';
    }