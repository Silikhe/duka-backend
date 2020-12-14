<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Order */

// $this->title = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="js-container" >
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Screenshot_2015-10-11_21.43.12.png'" alt="">
    <h1>Congratulations!!</h1>
    <p>You have successfully made your order</p>
    <p>Please check your email for more details on your order</p>
    <p>Meanwhile we have some queries with mailtrap our bad</p>
    <p>Press The button below to generate you order report</p>
    <p><em>Regards piga+luku team</em> </p>
</div>





<div class="order-view text-center">


    <p>
    <?=Html::a('Shopping Report', ['pdf', 'id' => $model->order_id], ['class' => 'btn btn-success'])?>

    </p>


</div>