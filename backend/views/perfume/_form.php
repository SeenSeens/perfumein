<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
/* @var $this yii\web\View */
/* @var $model backend\models\Perfume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Nước hoa</h3>
    </div>
    <div class="panel-body">
        <div class="perfume-form">
            <?php $form = ActiveForm::begin(['options' =>['enctype' =>'multipart/form-data']]); ?>
                <?= $form->field($model, 'Perfume_Name')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'ID_Category')->dropDownlist($dataCategory) ?>
                <?= $form->field($model, 'ID_Type_of_perfume')->dropDownlist($dataTypeofperfume)?>
                <?= $form->field($model, 'Price')->textInput() ?>
                <?= $form->field($model, 'Summary')->widget(TinyMce::className(), [
                    'options' => ['rows' => 6],
                    'language' => 'es',
                    'clientOptions' => [
                        'plugins' => [
                            "advlist autolink lists link charmap print preview anchor",
                            "searchreplace visualblocks code fullscreen",
                            "insertdatetime media table contextmenu paste"
                        ],
                        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                    ]
                ]) ?>
                <?= $form->field($model, 'Content')->widget(TinyMce::className(), [
                    'options' => ['rows' => 6],
                    'language' => 'es',
                    'clientOptions' => [
                        'plugins' => [
                            "advlist autolink lists link charmap print preview anchor",
                            "searchreplace visualblocks code fullscreen",
                            "insertdatetime media table contextmenu paste"
                        ],
                        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                    ]
                ]) ?>
                <?= $form->field($model, 'Discounts')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'Image')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
                <?= $form->field($model, 'Views')->textInput() ?>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


