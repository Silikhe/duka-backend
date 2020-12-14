<?php

use frontend\models\Images;
use frontend\models\Shoes;
use yii\bootstrap4\Modal;
use yii\helpers\Url;

$shoes = Shoes::find()->JoinWith('images')->all();

?>



<!-- <Homepage> -->


<div class="container-fluid mt-5 text-center text-md-left">
  <div class="container">
        <div class="row ml-5">
            <div class=" col-lg-12 container built">
                <div class="row">
                    <div class="explore col-lg-4">
                        <h1>Built</h1>
                        <h1 class="mb-3">for flight</h1>
                        <p>Introducing product name</p>
                        <p>Our lightest shoe,Ever.</p>
                        <a href="#" class="btn shop round-0 mt-4">Shop</a>
                    </div>
                    <div class="col-lg-8">
                        <img src="<?=Yii::$app->request->baseUrl?>/images/main.png" style="height: 70%;" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
   <!--New releases-->
   <div class="container mb-5">

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5 wom">
        <div class="card border border-light ">
            <img src="<?=Yii::$app->request->baseUrl?>/images/wear.png" style="" class="img-fluid">
            <h5 class="ctitle">Women</h5>
            <a href="<?=Url::to(['site/women'])?>" class="btitle">Shop Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="col-md-5 man">
        <div class="card border border-light">
            <img src="<?=Yii::$app->request->baseUrl?>/images/men.png" class="img-fluid">
            <h5 class="ctitle">Men</h5>
            <a href="<?=Url::to(['site/men'])?>" class="btitle">Shop Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
</div>



<!-- my new  -->


<!-- my carousel -->
<!-- end -->

<section class="container-fluid">
        <div class="clear-fix">
        <h4>New releases</h4>
        <hr>
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
          <!--Controls-->
          <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
          </div>
          <!--/.Controls-->
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">

            <!--First slide-->

            <div class="carousel-item active">

            <?php foreach ($shoes as $shoe) {?>
        <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">

              <!-- modal btn -->
              <a href="" data-toggle="modal" data-target="#exampleModal">
              <img src="<?=Yii::$app->request->baseUrl . '/' . $shoe->images[0]->img_path?>" class="card-img-top img-fluid" alt="...">
                <p></p>
            </a>
              <!-- end modal btn -->
              <div class="product-badge text-danger ml-1">48% Off</div>
              <div class="card-body">
              <h6 class="product-title"><a href="#" data-abc="true"><?=$shoe['shoe_name']?></a></h6>
                    <p class="product-price"> <del>ksh7000 </del> Ksh<span><?=$shoe['price']?></p>
               <div class="product-buttons">
                 <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="" data-original-title="Whishlist"><i class="fa fa-heart"></i></button>
                 <button type="button" val="<?=$shoe->shoe_id?>" class="addtocart btn btn-outline-primary btn-sm" data-toast="" data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                 <a class="ml-2" href="<?=Url::to(['site/viewitem', 'shoe_id' => $shoe->shoe_id])?>" >more...</a>
              </div>
                <p class="lead"><?=$shoe['description']?></p>
              </div>

            </div>
        </div>
        <?php }?>
      </div>
      <!-- end first slide  -->
              <!-- single add to cart modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">

                <div class="col-md-4">
                  <img src="" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <h3><?=$shoe->shoe_name?></h3>
                  <hr>
                  <p>There are many variations of passages of Lorem Ipsum.</p>
                  <hr>
                  <span><del>Ksh 3000</del> Ksh<?=$shoe->price?></span>
                  <div class="clear-fix"></div>
                  <h4>Description:</h4>
                  <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                </div>
                </div>
              </div>
              <div class="modal-footer">
                <a href="checkout.html" type="button" class="btn btn-danger">Continue to Shop</a>
                <a href="" type="button" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end single add to cart modal -->
      <!--Second slide-->
      <div class="carousel-item">
      <?php foreach ($shoes as $shoe) {?>
        <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">

              <!-- modal btn -->
              <a href="" data-toggle="modal" data-target="#exampleModal">
              <img src="<?=Yii::$app->request->baseUrl . '/' . $shoe->images[0]->img_path?>" class="card-img-top img-fluid" alt="...">
                <p></p>
            </a>
              <!-- end modal btn -->
              <div class="product-badge text-danger ml-1">48% Off</div>
              <div class="card-body">
              <h6 class="product-title"><a href="#" data-abc="true"><?=$shoe['shoe_name']?></a></h6>
                    <p class="product-price"> <del>ksh7000 </del> Ksh<span><?=$shoe['price']?></p>
               <div class="product-buttons">
                 <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="" data-original-title="Whishlist"><i class="fa fa-heart"></i></button>
                 <button type="button" val="<?=$shoe->shoe_id?>" class="addtocart btn btn-outline-primary btn-sm" data-toast="" data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                 <a class="ml-2" href="<?=Url::to(['site/viewitem', 'shoe_id' => $shoe->shoe_id])?>" >more...</a>
              </div>
                <p class="lead"><?=$shoe['description']?></p>
              </div>

            </div>
        </div>
        <?php }?>

      </div>
    </div>
    </div>
  </section>
<!-- end new releases -->
 <!-- start top kick -->
    <section class="container-fluid">
        <div class="clear-fix">
        <h4>Top kicks</h4>
        <hr>

        <!--Carousel Wrapper-->
        <div id="multi-item-example1" class="carousel slide carousel-multi-item" data-ride="carousel">
          <!--Controls-->
          <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example1" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example1" data-slide="next"><i class="fa fa-chevron-right"></i></a>
          </div>
          <!--/.Controls-->
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#multi-item-example1" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example1" data-slide-to="1"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">

            <!--First slide-->

            <div class="carousel-item active">

            <?php foreach ($shoes as $shoe) {?>
        <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">

              <!-- modal btn -->
              <a href="" data-toggle="modal" data-target="#exampleModal">
              <img src="<?=Yii::$app->request->baseUrl . '/' . $shoe->images[0]->img_path?>" class="card-img-top img-fluid" alt="...">
                <p></p>
            </a>
              <!-- end modal btn -->
              <div class="product-badge text-danger ml-1">48% Off</div>
              <div class="card-body">
              <h6 class="product-title"><a href="#" data-abc="true"><?=$shoe['shoe_name']?></a></h6>
                    <p class="product-price"> <del>ksh7000 </del> Ksh<span><?=$shoe['price']?></p>
               <div class="product-buttons">
                 <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="" data-original-title="Whishlist"><i class="fa fa-heart"></i></button>
                 <button type="button" val="<?=$shoe->shoe_id?>" class="addtocart btn btn-outline-primary btn-sm" data-toast="" data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                 <a class="ml-2" href="<?=Url::to(['site/viewitem', 'shoe_id' => $shoe->shoe_id])?>" >more...</a>
              </div>
                <p class="lead"><?=$shoe['description']?></p>
              </div>

            </div>
        </div>
        <?php }?>
        </div>
        <!--  -->
      <!--Second slide-->
    <div class="carousel-item">
    <?php foreach ($shoes as $shoe) {?>
        <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">

              <!-- modal btn -->
              <a href="" data-toggle="modal" data-target="#exampleModal">
              <img src="<?=Yii::$app->request->baseUrl . '/' . $shoe->images[0]->img_path?>" class="card-img-top img-fluid" alt="...">
                <p></p>
            </a>
              <!-- end modal btn -->
              <div class="product-badge text-danger ml-1">48% Off</div>
              <div class="card-body">
              <h6 class="product-title"><a href="#" data-abc="true"><?=$shoe['shoe_name']?></a></h6>
                    <p class="product-price"> <del>ksh7000 </del> Ksh<span><?=$shoe['price']?></p>
               <div class="product-buttons">
                 <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="" data-original-title="Whishlist"><i class="fa fa-heart"></i></button>
                 <button type="button" val="<?=$shoe->shoe_id?>" class="addtocart btn btn-outline-primary btn-sm" data-toast="" data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                 <a class="ml-2" href="<?=Url::to(['site/viewitem', 'shoe_id' => $shoe->shoe_id])?>" >more...</a>
              </div>
                <p class="lead"><?=$shoe['description']?></p>
              </div>

            </div>
        </div>
        <?php }?>
      </div>
      </div>
    </section>
<!-- end top kick -->
  <!--Subscribe section-->
  <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12 subscribe">
                <div class="row">

                    <div class="col-md-4 col-sm-12"></div>
                    <div class="col-md-4 col-sm-12 text-center">
                        <h1>Never miss a</h1>
                        <h1>drop</h1>
                        <p>Recieve updates about new products and </p>
                        <p>promotions.</p>

                    </div>
                    <div class="col-md-4 col-sm-12"></div>

                </div>
            </div>
        </div>
    </div>
    <!--end-->


<!-- end -->
  <?php
Modal::begin([
    'title' => '<h4>My Cart</h4>',
    'id' => 'addtocart',
    'size' => 'modal-md',
]);
echo "<div id='addtocartContent'></div>";
Modal::end();
?>