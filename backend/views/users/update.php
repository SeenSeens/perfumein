<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Users */

$this->title = 'Update Users: ' . $model->ID_Users;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Users, 'url' => ['view', 'id' => $model->ID_Users]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
