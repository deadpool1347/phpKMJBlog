<?php

namespace app\assets;

use yii\web\AssetBundle;

class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot/theme';
    public $baseUrl = '@web/theme';
    public $css = [
        'js/vendor/bootstrap/css/bootstrap.min.css',
        'fonts/font-awesome/css/font-awesome.min.css',
        'css/plugins.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        // 'js/vendor/jquery.min.js',
        'js/vendor/bootstrap/js/bootstrap.min.js',
        'js/plugins.js',
        'js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
