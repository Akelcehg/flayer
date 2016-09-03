<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AdvertiserAsset;

AdvertiserAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>



<?php echo $this->render('../partials/navbar.php') ?>
<?php echo $this->render('../partials/mainbar.php') ?>

<div class="container-fluid">
    <div class="content">

        <div class="content-container">
            <?= $content ?>
        </div> <!-- /.content-container -->

    </div> <!-- /.content -->
</div> <!-- /.content -->


<?php echo $this->render('../partials/footer.php') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
