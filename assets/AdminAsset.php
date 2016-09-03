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
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        /*'css/admin/bootstrap.min.css',
        'css/admin/bootstrap-override.css',
        'css/admin/weather-icons.min.css',
        'css/admin/jquery-ui-1.10.3.css',
        'css/admin/font-awesome.min.css',
        'css/admin/animate.min.css',
        'css/admin/animate.delay.css',
        'css/admin/pace.css',*/
        'css/admin/style.default.css'
    ];
    public $js = [
  /*      'js/admin/jquery-1.11.1.min.js',
        'js/admin/jquery-migrate-1.2.1.min.js',
        'js/admin/modernizr.min.js',
        'js/admin/pace.min.js',
        'js/admin/retina.min.js',
        'js/admin/jquery.cookies.js',
        'js/admin/custom.js',*/

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
