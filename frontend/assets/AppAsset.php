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
        'css/site.min.css',
        'css/slider.css',
        'css/site.css',
    ];
    public $js = [
		// 'js/bootstrap.min.js',
        // 'js/site.min.js',
		'js/modernizr.js',
		'js/jquery.cslider.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
