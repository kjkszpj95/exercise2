<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\grid\GridView;
?>

<section class="boxSearch">
    <form method="post" action="<?= \yii\helpers\Url::to(['/news/search'])?>">
        <input type="get" class="text" name="search" placeholder="Search">
    </form>
</section>
 <?php   echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'      => [
        'id',
        'header',
        'announcement',
        'maintext',
        'tag',
        'date',
    ],
    ]);

?>
