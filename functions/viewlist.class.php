<?php

class ViewList extends SingleList{

    public function showList(){
        $data = $this->getList();
        ?>
            <div class="row">
                <div class="col-sm-12">
                    <h3 style="color:<?=$data[0]['color']?>;" class="text-center"><?=$data[0]['name']?></h3>
                    <a href="#" class="list-link-back" data-id="<?=$_GET['id']?>">
                        <i class="fas fa-chevron-left text-muted"></i>
                    </a>
                </div>
            </div>
        <?php

        foreach($data as $row){?>
            <div class="row no-flex list">
                <div class="col-sm-6 align-items-center">
                    <input data-id="<?=$row['id']?>" type="checkbox" <?php echo ($row['selected']==1 ? checked : '') ?> class="list-item item-center">
                </div>
                <div class="col-sm-6">
                    <div class="text">
                        <p class="name <?php echo ($row['selected']==1 ? 'selected' : '') ?> "><?= $row['item'];?></p>
                    </div>
                </div>
            </div>
        <?php

        }
    }
}
