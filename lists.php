<!DOCTYPE html>
<html>
<head>
    <?php include './includes/includes.php'?>
</head>

<body>
    <div class="bg-grey">

        <?php include './includes/menu.php';
            $users = new ViewLists();
        ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center">Listor</h3>
                </div>
            </div>
            <?php
                $users->showAllLists();
            ?>

            <div class="row">
                <div class="col-sm-12">
                    <a href="addList.php"><i  class="add fas fa-plus-circle fa-4x"></i></a>
                </div>
            </div>
        </div>
    </div>
<?php include './includes/footer.php' ?>




