<?php
/**
 * Created by PhpStorm.
 * User: tuanin
 * Date: 05/11/2018
 * Time: 15:19
 */
namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class headertopareaWidget extends Widget {
    public $message;

    public function init() {
        parent::init();

    }

    public function run() {
        return $this->render('headertopareaWidget');
    }
}