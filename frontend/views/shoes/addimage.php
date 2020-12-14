<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Images */
/* @var $form ActiveForm */
?>
<div class="container addimage p-5 m-5">

    <?php $form = ActiveForm::begin(['id'=>'createimage'],[
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
    <div class="container">
    <?= $form->field($model, 'img_path')->fileInput(['maxlength' => true]) ?>
    </div>
    <div class="container">
    <?= $form->field($model, 'shoe_id')->hiddenInput(['value'=>$shoe_id])->label(false) ?>
    </div>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addimage -->
 