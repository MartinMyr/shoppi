<?php

class ViewCommon extends Common{

    public function showCommon(){
        $data = $this->getCommon();

        foreach($data as $row){?>
            <a href="#">
                <div class="row no-flex list">
                    <div class="col-sm-6 align-items-center">
                        <input data-name="<?=$row['item']?>" data-id="<?=$_GET['id']?>" type="checkbox" class="item-center common-checkbox">
                    </div>
                    <div class="col-sm-6 common-name">
                        <div class="text">
                            <p data-it="asd" class="name"><?= $row['item'];?></p>
                        </div>
                    </div>
                </div>
            </a>
            <?php
        }
    }
}
