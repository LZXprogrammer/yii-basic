<?php
use yii\helpers\Html;
use app\components\HelloWidget;
?>

<div class="site-error">

    <h1>你猜一猜吧</h1>

    <div>
        <?= HelloWidget::widget(['message' => 'Good Morning']) ?></hr>
        <?= HelloWidget::widget() ?>
    </div>

</div>