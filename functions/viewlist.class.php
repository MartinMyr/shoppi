<?php

class ViewList extends SingleList{

    public function showList(){
        $data = $this->getList();
        ?>
            <div class="row">
                <div class="col-sm-12">
                    <h3 style="color:<?=$data[0]['color']?>;" class="text-center"><?=$data[0]['name']?></h3>
                </div>
            </div>
        <?php
        foreach($data as $row){?>
            <a href="#">
                <div class="row no-flex list" data-id="<?=$row['id']?>">
                    <div class="col-sm-6">
                        <div class="text">
                            <p class="list-name"><?= $row['item'];?></p>
                        </div>
                    </div>
                </div>
            </a>
            <?php
        }
    }
}
