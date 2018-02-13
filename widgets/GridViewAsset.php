<?php
/**
 * Created by PhpStorm.
 * User: bianjunping
 * Date: 2018/2/8
 * Time: 上午11:01
 */

namespace limefamily\widgets;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the javascript files for the [[GridView]] widget.
 *
 */
class GridViewAsset extends AssetBundle
{
    public $sourcePath = '@vendor/limefamily/yii2-limetheme/assets';
    public $js = [
        'limeFamily.gridView.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
