<?php
use bupy7\flexslider\FlexSlider;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <?=


                FlexSlider::widget([
                    'items' => [
                        '<h4>'.$news[0]->name.'</h4><p>'.$news[0]->photo.$news[0]->text_head.'</p>',
                        [
                            'content' => '<h1>2</h1>',
                            'options' => [
                                'class' => 'my-class',
                            ],
                        ],
                        [
                            'content' => '<h1>3</h1>',
                            'options' => [
                                'class' => 'my-class',
                            ],

                        ],
                    ],
                ]);
                ?>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <h2>Ads</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-8">
                <br />
                <h2 align="center">News</h2>
               <?php foreach ($news as $news_item) {
                   echo '<p><b>'.$news_item->name.'</b></p>';
               } ?>


                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-2">
                <h2>Ads</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
