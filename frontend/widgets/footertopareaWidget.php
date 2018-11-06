<?php
/**
 * Created by PhpStorm.
 * User: tuanin
 * Date: 05/11/2018
 * Time: 18:18
 */

namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class footertopareaWidget extends Widget {
    public $message;

    public function init() {
        parent::init();

    }

    public function run() {
        return $this->render('footertopareaWidget');
    }
}