<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 09.06.18
 * Time: 11:32
 */
?>

<div class="body-content">

    <div class="row">
        <div class="col-lg-12">
            <?php
            foreach ($news as $item) {
                echo \yii\bootstrap\Html::a($item->name,['news/one','url'=>$item->id]);

            }



            ?>

        </div>

    </div>


</div>