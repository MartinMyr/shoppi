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
            <div class="col-sm-12">
                <h3 class="text-center">Lägg till en lista</h3>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form method="post" id="form">
                    <div class="form-group">
                        <strong><label class="color" for="input-name">Namn</label></strong>
                        <input type="text" name="add-list-name" class="form-control" id="input-name">
                        <input type="text" name="add-list-color" hidden class="form-control" id="input-color">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <strong><label class="color" for="input-color">Färg</label></strong>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 flex">
               <div class="color-box" data-color="orange"></div>
               <div class="color-box" data-color="green"></div>
               <div class="color-box" data-color="purple"></div>
               <div class="color-box" data-color="deepskyblue"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 flex">
                <div class="color-box new-color" data-color="turquoise"></div>
                <div class="color-box new-color" data-color="greenyellow"></div>
                <div class="color-box new-color" data-color="red"> </div>
                <div class="color-box new-color" data-color="blueviolet"></div>
            </div>
        </div>

        <button type="submit" class="btn submit-add-list btn-primary">Submit</button>
    </div>
</div>

<?php include './includes/footer.php'?>
</body>
</html>



