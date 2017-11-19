<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use backend\assets\AppAsset;
use backend\assets\jetson\AdminAsset;

AppAsset::register($this);
AdminAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/renj1e/yii2-kosmo-template/src/');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link type="text/css" href="http://chat.agency.dev/cometchat/cometchatcss.php" rel="stylesheet" charset="utf-8">
<script type="text/javascript" src="http://chat.agency.dev/cometchat/cometchatjs.php" charset="utf-8"></script>
    <?php $this->head() ?>
</head>
<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-fixed ks-theme-jungle-green ks-page-loading">
<?php $this->beginBody() ?>
    <!-- BEGIN HEADER -->
    <nav class="navbar ks-navbar">

        <?= $this->render(
            'partials/header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>
    </nav>

    <div class="ks-container">
        <?= $this->render(
            'partials/left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'partials/content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>