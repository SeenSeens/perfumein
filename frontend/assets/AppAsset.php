<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Montserrat:400,700',
        '/css/bootstrap.min.css',
        '/css/owl.carousel.css',
        '/css/owl.theme.css',
        '/css/owl.transitions.css',
        '/css/font-awesome.min.css',
        '/css/animate.css',
        '/css/slicknav.css',
		'/lib/rs-plugin/css/settings.css',
        '/css/normalize.css',
        '/css/home-6-color.css',
        '/css/main.css',
        '/style.css',
        '/css/responsive.css',
    ];
    public $js = [
        '/js/vendor/modernizr-2.8.3.min.js',
        '/js/vendor/jquery-1.11.2.min.js',
		'/js/bootstrap.min.js',
		'/js/owl.carousel.min.js',
		'/js/jquery.slicknav.js',
		'/js/jquery.countdown.min.js',
		'/js/price-slider.js',
		'/js/jquery.scrollUp.min.js',
		'/lib/rs-plugin/js/jquery.themepunch.plugins.min.js',
		'/lib/rs-plugin/js/jquery.themepunch.revolution.min.js',
		'/lib/rs-plugin/rs.home.js',
		'/js/plugins.js',
		'/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
