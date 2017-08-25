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
		'css/bootstrap.xmin.css',
		'css/AdminLTE.min.css',
		'css/skin-yellow-light.min.css',
                'css/site.css',
                'css/toast/toastr.min.css',
                'css/bootstrap-datetimepicker.min.css',
    ];
    public $js = [
//		'js/jQuery-2.1.4.min.js',
		'js/bootstrap.min.js',
		'js/app.min.js',
                'js/toast/toastr.min.js',
                'js/bootstrap-datetimepicker.min.js',
		
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
