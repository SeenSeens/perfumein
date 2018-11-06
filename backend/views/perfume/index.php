<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PerfumeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perfumes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfume-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Perfume', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_Perfume',
            'ID_Category',
            'ID_Type_of_perfume',
            'Perfume_Name',
            'Price',
            //'Summary',
            //'Content:ntext',
            //'Discounts',
            //'Image',
            //'Views',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
