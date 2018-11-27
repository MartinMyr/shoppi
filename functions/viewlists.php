<?php

class ViewLists extends Lists {

    public function showAllLists(){
       $data = $this->getAllLists();
       foreach($data as $row){?>
           <a href="#">
                <div class="row no-flex list">
                    <div class="col-sm-6">
                        <div class="text">
                            <p class="list-name"><?= $row['name'];?></p>
                            <p class="quantity">32/32 varor</p>
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