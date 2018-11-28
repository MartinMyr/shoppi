<!DOCTYPE html>
<html>
<head>
    <?php include './includes/includes.php'?>
</head>

<body>
<div class="bg-grey">

    <?php include './includes/menu.php';
    ?>

    <div class="container-fluid">

        <?php
        $list = new ViewList();
        $list->showList();
        ?>

        <div class="row">
            <div class="col-sm-12">
                <a href="addItem.php?id=<?= $_GET['id']?>"><i  class="add fas fa-plus-circle fa-4x"></i></a>
            </div>
        </div>
    </div>
</div>
<?php include './includes/footer.php' ?>




