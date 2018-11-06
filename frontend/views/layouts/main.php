<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\headertopareaWidget;
use frontend\widgets\mainmenuareaWidget;
use frontend\widgets\sliderwrapWidget;
use frontend\widgets\promotionareaWidget;
use frontend\widgets\featuresareaWidget;
use frontend\widgets\saleproductareaWidget;
use frontend\widgets\footertopareaWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody([
        //'class' => 'home-5 home-6',
        'options' => ['class' => 'home-5', 'home-6'],

]) ?>

<!-- header start -->
<header>
    <!-- header-top-area start -->
    <?= headertopareaWidget::widget(); ?>
    <!-- header-top-area end -->
    <!-- mainmenu-area start -->
    <?= mainmenuareaWidget::widget(); ?>
    <!-- mainmenu-area end -->
</header>
<!-- header end -->

<!-- HOME SLIDER -->
<?= sliderwrapWidget::widget(); ?>
<!-- HOME SLIDER END -->

<!-- promotion-area start -->
<?= promotionareaWidget::widget(); ?>
<!-- promotion-area end -->

<!-- features-area start -->
<?= featuresareaWidget::widget(); ?>
<!-- features-area end -->

<!-- sale-product-area start -->
<?= saleproductareaWidget::widget() ?>
<!-- sale-product-area end -->

<!-- category-area start -->

<!-- category-area end -->
<!-- banner-area start -->

<!-- banner-area end -->
<!-- recent-post-area start -->

<!-- recent-post-area end -->
<!-- brand-area start -->

<!-- brand-area end -->
<!-- corporate-about-area start -->

<!-- corporate-about-area end -->

<!-- footer start -->
<footer>
    <!-- footer-top-area start -->
    <?= footertopareaWidget::widget() ?>
    <!-- footer-top-area end -->
    <!-- footer-middle-area start -->

    <!-- footer-middle-area end -->
    <!-- footer-bootom-area start -->

    <!-- footer-bootom-area end -->
</footer>
<!-- footer end -->

<!-- QUICKVIEW PRODUCT -->

<!-- END QUICKVIEW PRODUCT -->


<!-- header end -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
