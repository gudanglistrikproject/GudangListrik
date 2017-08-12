<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css/bootstrap.min.css',
		'css/AdminLTE.min.css',
		'css/skin-yellow-light.min.css',
        'css/site.css',
    ];
    public $js = [
		'js/jQuery-2.1.4.min.js',
		'js/bootstrap.min.js',
		'js/app.min.js',
		
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
