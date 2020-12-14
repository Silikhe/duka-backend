<?php

use frontend\models\ShoeBrand;
use frontend\models\ShoeCategory;
use yii\bootstrap4\Modal;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shoes */
/* @var $form yii\widgets\ActiveForm */
$brand = ArrayHelper::map(ShoeBrand::find()->all(), 'brand_id', 'brand_name');
$category = ArrayHelper::map(ShoeCategory::find()->all(), 'cat_id', 'cat_name');

?>
<div class="md-stepper-horizontal orange">
    <div class="md-step active done">
      <div class="md-step-circle"><span>1</span></div>
      <div class="md-step-title">Create Shoe</div>
      <div class="md-step-bar-left"></div>
      <div class="md-step-bar-right"></div>
    </div>
    <div class="md-step active editable">
      <div class="md-step-circle"><span>2</span></div>
      <div class="md-step-title">Add Image</div>
      <div class="md-step-optional">Optional</div>
      <div class="md-step-bar-left"></div>
      <div class="md-step-bar-right"></div>
    </div>

    <div class="md-step">
      <div class="md-step-circle"><span>3</span></div>
      <div class="md-step-title">Finish</div>
      <div class="md-step-bar-left"></div>
      <div class="md-step-bar-right"></div>
    </div>
  </div>

<div class="container mr-5" style="margin-bottom:50px; margin-top:50px;">

    <div class="shoes-form">
        <div class="col-md-12">

            <?php $form = ActiveForm::begin();?>

            <div class="col-md-8">
                <?=$form->field($model, 'shoe_name')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-8">
                <?=$form->field($model, 'description')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-8">
                <?=$form->field($model, 'shoe_type')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-10">
                        <?=$form->field($model, 'cat_id')->dropDownList($category)?>
                    </div>
                    <div class="col-md-2" style="margin-top:30px;">
                    <button type="button" class="p-1 btn-round btn-success addcategory"><i class="fa fa-plus" aria-hidden="true"></i>   </button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-10">
                        <?=$form->field($model, 'brand_id')->dropDownList($brand)?>
                    </div>
                    <div class="col-md-2" style="margin-top:30px;">
                    <button type="button" class="p-1 btn-success addbrand btn-round"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <?=$form->field($model, 'shoe_size')->textInput(['maxlength' => true])?>
            </div>
            <div class="col-md-8">
                <?=$form->field($model, 'price')->textInput()?>
            </div>

            <div class="col-md-8">
                <?=$form->field($model, 'created_at')->hiddenInput()->label(false)?>
            </div>
            <div class="col-md-6">
                <div class="form-group text-center">
                    <?=Html::submitButton('Next Step', ['class' => 'btn btn-primary btn-lg'])?>
                </div>
            </div>
            <?php ActiveForm::end();?>

        </div>
    </div>
</div>

<?php
Modal::begin([
    'title' => '<h4>Add a shoe brand</h4>',
    'id' => 'addbrand',
    'size' => 'modal-lg',
]);
echo "<div id='addbrandContent'></div>";
Modal::end();
?>
<?php
Modal::begin([
    'title' => '<h4>Add a shoe category</h4>',
    'id' => 'addcategory',
    'size' => 'modal-lg',
]);
echo "<div id='addcategoryContent'></div>";
Modal::end();
?>
