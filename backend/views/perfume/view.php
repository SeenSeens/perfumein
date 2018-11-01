<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Perfume */

$this->title = $model->ID_Perfume;
$this->params['breadcrumbs'][] = ['label' => 'Perfumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfume-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_Perfume], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_Perfume], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_Perfume',
            'ID_Category',
            'ID_Type_of_perfume',
            'Perfume_Name',
            'Price',
            'Summary',
            'Content:ntext',
            'Discounts',
            'Image_Link',
            'Views',
        ],
    ]) ?>

</div>
