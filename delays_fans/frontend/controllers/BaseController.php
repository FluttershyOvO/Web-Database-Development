<?php
/* 
 * Team:彩笔小队
 * Coding by 杨友恒 2210203
 * 2024/12/20
 * 评论
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\traits\BaseAction;
use common\behaviors\ActionLogBehavior;

/**
 * Class BaseController
 * @package frontend\controllers
 * @author jianyan74 <751393839@qq.com>
 */
class BaseController extends Controller
{
    use BaseAction;

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'actionLog' => [
                'class' => ActionLogBehavior::class
            ]
        ];
    }

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        // 指定使用哪个语言翻译
        // Yii::$app->language = 'en';
        return parent::init();
    }
}