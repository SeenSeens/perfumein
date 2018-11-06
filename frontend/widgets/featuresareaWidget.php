<?php
/**
 * Created by PhpStorm.
 * User: tuanin
 * Date: 05/11/2018
 * Time: 16:44
 */


namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Perfume;


class featuresareaWidget extends Widget {
    public $message;

    public function init() {
        parent::init();

    }

    public function run() {
        $ranData = new Perfume();
        $ranData = $ranData->getFeaturedproducts();
        return $this->render('featuresareaWidget',[
            'ranData' =>$ranData
        ]);
    }
}
