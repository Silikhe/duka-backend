<?php

/* @var $this yii\web\View */

use frontend\models\Images;
use frontend\models\Shoes;
use yii\helpers\Html;

$shoe_kids = Shoes::find()->where(['cat_id' => 3])->joinWith('images')->all();

?>

<!-- main body -->

                    <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4 container-fluid" data-ride="carousel" style="margin-top: 100px;">

<!--Indicators-->
<ol class="carousel-indicators">
  <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-1z" data-slide-to="1"></li>
  <li data-target="#carousel-example-1z" data-slide-to="2"></li>
</ol>
<!--/.Indicators-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

  <!--First slide-->
  <div class="carousel-item active">
    <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%282%29.jpg'); background-repeat: no-repeat; background-size: cover " style="">

      <!-- Mask & flexbox options-->
      <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center white-text mx-5 wow fadeIn" style="">
          <h1 class="mb-4">
          Cool kicks
          </h1>

          <p>
          Good Brand
          </p>

          <p class="mb-4 d-none d-md-block">
          Good product
          </p>

          <a target="_blank" href="" class="btn btn-outline-white btn-lg">Shop Now
            <i class="fas fa-graduation-cap ml-2"></i>
          </a>
        </div>
        <!-- Content -->

      </div>
      <!-- Mask & flexbox options-->

    </div>
  </div>
  <!--/First slide-->

  <!--Second slide-->
  <div class="carousel-item">
    <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%283%29.jpg'); background-repeat: no-repeat; background-size: cover;">

      <!-- Mask & flexbox options-->
      <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center white-text mx-5 wow fadeIn">
        <h1 class="mb-4">
          Cool kicks
          </h1>

          <p>
          Good Brand
          </p>


          <p class="mb-4 d-none d-md-block">
          Good product Quality
          </p>

          <a target="_blank" href="" class="btn btn-outline-white btn-lg">Shop Now
            <i class="fas fa-graduation-cap ml-2"></i>
          </a>
        </div>
        <!-- Content -->

      </div>
      <!-- Mask & flexbox options-->

    </div>
  </div>
  <!--/Second slide-->

  <!--Third slide-->
  <div class="carousel-item">
    <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%285%29.jpg'); background-repeat: no-repeat; background-size: cover;">

      <!-- Mask & flexbox options-->
      <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center white-text mx-5 wow fadeIn">
        <h1 class="mb-4">
          Cool kicks
          </h1>

          <p>
          Good Brand
          </p>


          <p class="mb-4 d-none d-md-block">
          Good product Quality
          </p>

          <a target="_blank" href="" class="btn btn-outline-white btn-lg">Shop Now
            <i class="fas fa-graduation-cap ml-2"></i>
          </a>
        </div>
        <!-- Content -->

      </div>
      <!-- Mask & flexbox options-->

    </div>
  </div>
  <!--/Third slide-->

</div>
<!--/.Slides-->

<!--Controls-->
<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
<!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

<!--Main layout-->
<main>
<div class="container">

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

    <!-- Navbar brand -->
    <span class="navbar-brand">Categories:</span>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">All
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shirts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sport wears</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Outwears</a>
        </li>

      </ul>
      <!-- Links -->

      <form class="form-inline">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </div>
      </form>
    </div>
    <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->

  <!--Section: Products v.3-->
  <section class="text-center mb-4">

    <!--Grid row-->
    <div class="row wow fadeIn">
    <?php foreach ($shoe_kids as $kids) {?>

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card image-->
          <div class="view overlay">
            <img src="<?=Yii::$app->request->baseUrl . '/' . $kids->images[0]->img_path?>" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body text-center">
            <!--Category & Title-->
            <a href="" class="grey-text">
              <h5><?=$kids->shoe_name?></h5>

            </a>
            <h5>
              <strong>
                <a href="" class="dark-grey-text"><?=$kids->description?>
                  <span class="badge badge-pill danger-color">NEW</span>
                </a>
              </strong>
            </h5>

            <h4 class="font-weight-bold blue-text">
              <strong>Ksh. <?=$kids->price?></strong>
            </h4>

          </div>
          <!--Card content-->

        </div>
        <!--Card-->

      </div>
      <!--Grid column-->
      <?php }?>
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card image-->
          <div class="view overlay">
            <img src="<?=Yii::$app->request->baseUrl?>/images/men.png"" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body text-center">
            <!--Category & Title-->
            <a href="" class="grey-text">
              <h5>Sport wear</h5>
            </a>
            <h5>
              <strong>
                <a href="" class="dark-grey-text">Sweatshirt</a>
              </strong>
            </h5>

            <h4 class="font-weight-bold blue-text">
              <strong>Ksh. 1000</strong>
            </h4>

          </div>
          <!--Card content-->

        </div>
        <!--Card-->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card image-->
          <div class="view overlay">
            <img src="<?=Yii::$app->request->baseUrl?>/images/men.png"" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body text-center">
            <!--Category & Title-->
            <a href="" class="grey-text">
              <h5>Sport wear</h5>
            </a>
            <h5>
              <strong>
                <a href="" class="dark-grey-text">Grey blouse
                  <span class="badge badge-pill primary-color">bestseller</span>
                </a>
              </strong>
            </h5>

            <h4 class="font-weight-bold blue-text">
              <strong>Ksh. 1000</strong>
            </h4>

          </div>
          <!--Card content-->

        </div>
        <!--Card-->

      </div>
      <!--Grid column-->

      <!--Fourth column-->
      <div class="col-lg-3 col-md-6 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card image-->
          <div class="view overlay">
            <img src="<?=Yii::$app->request->baseUrl?>/images/men.png"" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body text-center">
            <!--Category & Title-->
            <a href="" class="grey-text">
              <h5>Outwear</h5>
            </a>
            <h5>
              <strong>
                <a href="" class="dark-grey-text">Black jacket</a>
              </strong>
            </h5>

            <h4 class="font-weight-bold blue-text">
              <strong>Ksh. 1000</strong>
            </h4>

          </div>
          <!--Card content-->

        </div>
        <!--Card-->

      </div>
      <!--Fourth column-->

    </div>
    <!--Grid row-->

    <!--Grid row-->
    <div class="row wow fadeIn">

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card image-->
          <div class="view overlay">
            <img src="<?=Yii::$app->request->baseUrl?>/images/men.png"" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body text-center">
            <!--Category & Title-->
            <a href="" class="grey-text">
              <h5>Shirt</h5>
            </a>
            <h5>
              <strong>
                <a href="" class="dark-grey-text">Denim shirt
                  <span class="badge badge-pill danger-color">NEW</span>
                </a>
              </strong>
            </h5>

            <h4 class="font-weight-bold blue-text">
              <strong>Ksh. 1000</strong>
            </h4>

          </div>
          <!--Card content-->

        </div>
        <!--Card-->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card image-->
          <div class="view overlay">
            <img src="<?=Yii::$app->request->baseUrl?>/images/men.png"" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body text-center">
            <!--Category & Title-->
            <a href="" class="grey-text">
              <h5>Sport wear</h5>
            </a>
            <h5>
              <strong>
                <a href="" class="dark-grey-text">Sweatshirt</a>
              </strong>
            </h5>

            <h4 class="font-weight-bold blue-text">
              <strong>Ksh. 1000</strong>
            </h4>

          </div>
          <!--Card content-->

        </div>
        <!--Card-->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card image-->
          <div class="view overlay">
            <img src="<?=Yii::$app->request->baseUrl?>/images/men.png"" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body text-center">
            <!--Category & Title-->
            <a href="" class="grey-text">
              <h5>Sport wear</h5>
            </a>
            <h5>
              <strong>
                <a href="" class="dark-grey-text">Grey blouse
                  <span class="badge badge-pill primary-color">bestseller</span>
                </a>
              </strong>
            </h5>

            <h4 class="font-weight-bold blue-text">
              <strong>Ksh. 1000</strong>
            </h4>

          </div>
          <!--Card content-->

        </div>
        <!--Card-->

      </div>
      <!--Grid column-->

      <!--Fourth column-->
      <div class="col-lg-3 col-md-6 mb-4">

        <!--Card-->
        <div class="card">

          <!--Card image-->
          <div class="view overlay">
            <img src="<?=Yii::$app->request->baseUrl?>/images/men.png"" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body text-center">
            <!--Category & Title-->
            <a href="" class="grey-text">
              <h5>Outwear</h5>
            </a>
            <h5>
              <strong>
                <a href="" class="dark-grey-text">Black jacket</a>
              </strong>
            </h5>

            <h4 class="font-weight-bold blue-text">
              <strong>Ksh. 1000</strong>
            </h4>

          </div>
          <!--Card content-->

        </div>
        <!--Card-->

      </div>
      <!--Fourth column-->

    </div>
    <!--Grid row-->

  </section>
  <!--Section: Products v.3-->

  <!--Pagination-->
  <nav class="d-flex justify-content-center wow fadeIn">
    <ul class="pagination pg-blue">

      <!--Arrow left-->
      <li class="page-item disabled">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>

      <li class="page-item active">
        <a class="page-link" href="#">1
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">4</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">5</a>
      </li>

      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
  <!--Pagination-->

</div>
</main>
<!--Main layout-->



                </div>
                <br>
            </div>
        </div>
    </div>
</div>
</div>