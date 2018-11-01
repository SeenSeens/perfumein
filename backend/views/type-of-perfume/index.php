<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TypeOfPerfumeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Type Of Perfumes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-of-perfume-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Type Of Perfume', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_Type_of_perfume',
            'Name_of_perfume',
            'ID_Genre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
