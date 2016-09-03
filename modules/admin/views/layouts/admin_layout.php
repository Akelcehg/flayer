<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AdminAsset;

AdminAsset::register($this);
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

<?php echo $this->render('../partials/header.php') ?>
<section>
    <div class="mainwrapper">
        <?php echo $this->render('../partials/left_panel.php') ?>

        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                            <li><a href="">Pages</a></li>
                            <li>Blank Page</li>
                        </ul>
                        <h4>Blank Page</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

            <div class="contentpanel">

                <?= $content ?>

            </div><!-- contentpanel -->

        </div>
    </div>
</section>
<script src="js/admin/jquery-1.11.1.min.js"></script>
<script src="js/admin/jquery-migrate-1.2.1.min.js"></script>
<script src="js/admin/bootstrap.min.js"></script>
<script src="js/admin/modernizr.min.js"></script>
<script src="js/admin/pace.min.js"></script>
<script src="js/admin/retina.min.js"></script>
<script src="js/admin/jquery.cookies.js"></script>

<script src="js/admin/custom.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
