<?php

use common\models\user;
use frontend\models\Shoes;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form yii\widgets\ActiveForm */
$shoes = Shoes::find()->JoinWith('images')->all();
$shoe = ArrayHelper::map(Shoes::find()->all(), 'shoe_id', 'price');
$user_id = user::find()->where(['id' => Yii::$app->user->id])->one();
?>
<div class="addtocart">

    <?php $form = ActiveForm::begin();?>

    <?=$form->field($model, 'shoe_id')->hiddenInput(['value' => $shoe_id, 'readonly' => true])->label(false)?>

    <?=$form->field($model, 'user_id')->hiddenInput(['value' => $user_id->id, 'readonly' => true])->label(false)?>

        <div class="row">
        <div class="form-group col-md-9">
            <?=Html::submitButton('Save to cart', ['class' => 'btn btn-primary'])?>
        </div>

        <div class="form-group col-md-3 pull-right">
        <a href="<?=Url::to(['order/create'])?>" class="btn btn-secondary">Proceed to checkout</a>
        </div>

        </div>
    <?php ActiveForm::end();?>

</div><!-- addtocart -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pb-1">
                <div class="modal-title d-flex"> <i class="fas fa-folder-open"></i>
                    <h5 class="ml-2">New project</h5>
                </div> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pb-1">
                <div class="modal-title d-flex"> <i class="fas fa-folder-open"></i>
                    <h5 class="ml-2">New project</h5>
                </div> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <form>
                <div class="modal-body px-0">
                    <div class="d-flex justify-content-around">
                        <div class="form-group"> <input type="email" class="form-control" placeholder="Frame.io movie"> </div>
                        <div class="form-group"> <input type="name" class="form-control" placeholder="Design team"> </div>
                    </div>
                    <div class="d-flex justify-content-between px-4 mt-2">
                        <div class="d-flex"><i class="fas fa-globe-asia"></i><span class="ml-2 text-muted">Anyone on your team can view</span></div> <span class="badge badge-success">Public</span>
                    </div>
                    <div class="d-flex justify-content-between px-4 mt-3">
                        <div class="d-flex"><i class="fab fa-slack"></i><span class="ml-2 text-muted">Slack notification</span></div> <span class="text-muted">#product design <i class="fas fa-sort-down pt-0"></i></span>
                    </div>
                </div>
            </form>
            <div class="footer mt-2 py-3">
                <div class="d-flex justify-content-between px-4"> <span class="text-muted">More options <i class="fas fa-sort-down pt-0 ml-1"></i></span> <button type="button" class="btn btn-primary" data-dismiss="modal">Create project</button> </div>
            </div>
        </div>
    </div>
</div>
            <div class="footer mt-2 py-3">
                <div class="d-flex justify-content-between px-4"> <span class="text-muted">More options <i class="fas fa-sort-down pt-0 ml-1"></i></span> <button type="button" class="btn btn-primary" data-dismiss="modal">Create project</button> </div>
            </div>
        </div>
    </div>
</div>
