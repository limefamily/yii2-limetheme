<?php
/**
 * Created by PhpStorm.
 * User: bianjunping
 * Date: 2018/2/8
 * Time: 上午11:01
 */

namespace limefamily\widgets\assets;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the javascript files for the [[ButtonSelect]] widget.
 *
 */
class ButtonSelectAsset extends AssetBundle
{
    public $sourcePath = '@vendor/limefamily/yii2-limetheme/limetheme/dist';
    public $css = [
        'css/component/buttonSelect.css',
    ];
    public $js = [
        'js/component/limeFamily.buttonSelect.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
