<?php

use common\models\user;
use frontend\models\Cart;
use frontend\models\Shoes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$user_id = user::find()->where(['id' => Yii::$app->user->id])->one();

// $total_shoes = Cart::find()->JoinWith('shoes')->all();
// $total_cart = Cart::find()->JoinWith('shoes')->sum('price');
$cart_list = Cart::find()->JoinWith('shoe')->all();
$cart_total = Cart::find()->asArray()->all();
$total_price = Cart::find()->JoinWith('shoe')->sum('price');
$total_shoes = Cart::find()->JoinWith('shoe')->all();
$total_cart = Cart::find()->JoinWith('shoe')->sum('price');
$shoes = Shoes::find()->JoinWith('images')->all();
?>


<div class="container-fluid" style="margin-left:40px;margin-top: 50px;">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3>CHECKOUT</h3>
            </div>
            <div class="col-md-7" style="margin-left: 60px;margin-top: 30px;">
                <h4>1. Shipping info</h4>
                <hr>
                <div class="order">

<?php $form = ActiveForm::begin();?>

    <?=$form->field($model, 'user_id')->hiddenInput(['value' => $user_id->id, 'readonly' => true])->label(false)?>
    <?=$form->field($model, 'delivery_address')?>
    <?=$form->field($model, 'paymethod')->dropDownList(['Credit Card' => 'Credit Card', 'M-Pesa' => 'M-Pesa', '' => ''], ['prompt' => ''])?>

    <div class="form-group">
        <?=Html::submitButton('Submit', ['class' => 'btn btn-primary'])?>
    </div>
<?php ActiveForm::end();?>

</div><!-- order -->
            </div>
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">My Cart</span>
                    <span class="badge badge-secondary badge-pill">Kshs.</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Subtotal</h6>
                            <!-- <small class="text-muted">Brief description</small> -->
                        </div>
                        <span class="text-muted"><?=$total_cart?></span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between">
                        <span>Estimated tax</span>
                        <strong>0.00</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (Kshs.)</span>
                        <strong><?=$total_cart?></strong>
                    </li>
                </ul>
                <br>
                <a href="<?=Url::to(['site/index'])?>" class="btn btn-primary btn-lg btn-block">Continue shopping</a>
            </div>
        </div>
    </div>

    </div>
    </div>
    <br>

     <!-- start checkout -->
     <?php $form = ActiveForm::begin();?>
     <?=$form->field($model, 'user_id')->hiddenInput(['value' => $user_id->id, 'readonly' => true])->label(false)?>

     <section class="container-fluid top-margin-checkout">
    	<div class="row">
			<div class="container mt-5 px-5">
    <div class="mb-4">
        <h2>Confirm order and pay</h2> <span>please make the payment, after that you can enjoy all the features and benefits.</span>
    </div>
    <div class="row">
        <div class="col-md-8">
        <?=$form->field($model, 'paymethod')->dropDownList(['Credit Card' => 'Credit Card', 'M-Pesa' => 'M-Pesa', '' => ''], ['prompt' => ''])?>
            <div class="card p-3">
                <h6 class="text-uppercase">Payment details For credit Card</h6>
                <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Name on card</span> </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Expiry</span> </div>
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>CVV</span> </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4">
                    <h6 class="text-uppercase">Billing Address</h6>
                    <div class="row mt-3">
                        <div class="col-md-6">
                        <?=$form->field($model, 'delivery_address')?>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>City</span> </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>State/Province</span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Zip code</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-4 d-flex justify-content-between">
                 <a href="<?=Url::to(['site/index'])?>" class="btn btn-danger px-3">Continue Shopping</a>
                 <?=Html::submitButton('Submit', ['class' => 'btn btn-primary'])?>
            <!-- <a href="" data-target="#myModal" data-toggle="modal" class="btn btn-success px-3">Pay Ksh <?=$total_price?></a> -->
         </div>
         <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog">
         <div class="card">
             <div class="text-right cross"> <i class="fa fa-times"></i> </div>
             <div class="card-body text-center"> <img src="https://img.icons8.com/bubbles/200/000000/trophy.png">
                 <h4>CONGRATULATIONS!</h4>
                 <p>Your order has been placed succesfully!</p>
                 <p>Check your email for more infomation about the order details</p>
                 <button class="btn btn-primary btn-square continue">FINISH</button>
             </div>
         </div>
     </div>
 </div>
        </div>
        <div class="col-md-4">
            <div class="card card-blue p-3 text-white mb-3"> <span>You have to pay</span>
                <div class="d-flex flex-row align-items-end mb-3">
                    <h1 class="mb-0 yellow">Ksh <?=$total_price?></h1> <span>.00</span>
                </div> <span>Enjoy all the features and perk after you complete the payment</span> <a href="#" class="yellow decoration">Know all the features</a>
                <div class="hightlight"> <span>100% Guaranteed support and update for the next 5 years.</span> </div>
            </div>
        </div>
    </div>
</div>
    			<!-- end payments -->
    		</div>
    		<!-- cart items -->
</div>
</section>
    <!-- end checkout -->
    <?php ActiveForm::end();?>
