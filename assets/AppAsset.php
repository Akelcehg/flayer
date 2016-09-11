<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font_awesome.css',
        'css/ie.css',
        'css/mystyles.css',
        'css/styles.css',
        'css/orient.css'
    ];
    public $js = [
        'js/bootstrap.js',
        'js/flexnav.min.js',
        'js/icheck.js',
        'js/nicescroll.js',
        'js/ionrangeslider.js',
        //'js/magnific.min.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
