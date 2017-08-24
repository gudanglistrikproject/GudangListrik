<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/site.min.css',
        'css/slider.css',
        'css/site.css',
        'css/toast/toastr.min.css',
        'css/daftar-login/css/reset-form.css',
        'css/daftar-login/css/style-form.css',
    ];
    public $js = [
        // 'js/bootstrap.min.js',
        // 'js/site.min.js',
        'js/modernizr.js',
        'js/jquery.cslider.js',
        'js/toast/toastr.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
