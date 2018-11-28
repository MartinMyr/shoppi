<!DOCTYPE html>
<html>
<head>
    <?php include './includes/includes.php'?>
</head>

<body>
<div class="bg-grey">
    <?php include './includes/menu.php'?>
    <div class="container-fluid">
        <div class="row no-flex">
            <div class="col-sm-12 align-items-center">
                <h3 class="text-center">Lägg till i listan</h3>

            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="form-group">
                    <input type="text" name="add-item-name" class="form-control" id="input-name">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
               <h5>Ofta tillagda</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php
                    $common = new ViewCommon;
                    $common->showCommon();

                ?>
            </div>
        </div>
    </div>
</div>

<?php include './includes/footer.php'?>
</body>
</html>



