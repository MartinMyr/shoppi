<?php

class ViewLists extends Lists {

    public function showAllLists(){
       $data = $this->getAllLists();
       foreach($data as $row){?>
           <a href="#" class="list-link" data-id="<?=$row['id']?>">
                <div class="row no-flex list">
                    <div class="col-sm-6">
                        <div class="text">
                            <p style="color:<?=$row['color']?>" class="list-name"><?= $row['name'];?></p>
                        </div>
                    </div>
                    <div class="col-sm-6 align-items-center">
                        <i class="fas fa-chevron-right text-muted"></i>
                    </div>
                </div>
            </a>
<?php
        }
    }
}