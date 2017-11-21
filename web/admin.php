<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use backend\assets\AppAsset;
use backend\assets\jetson\AdminAsset;

AppAsset::register($this);
AdminAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/renj1e/yii2-admin-jetson-template/src/');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <!-- BEGIN HEADER -->


        <?= $this->render(
            'partials/header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>



        <?= $this->render(
            'partials/left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'partials/content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>
        

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>