<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">

<head>
  <meta charset="<?=Yii::$app->charset?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->registerCsrfMetaTags()?>
  <title><?=Html::encode($this->title)?></title>
  <?php $this->head()?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
  <?php $this->beginBody()?>

  <!-- <div class="wrap"> -->
  <nav class="navbar nav-boot navbar-expand-lg fixed-top navbar-light bg-light navbar-fixed">
        <a class="navbar-brand" href="#">PIGA+LUKU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse pull-right" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=Url::to(['site/index'])?>">Home <span class="sr-only">(current)</span></a>
                   </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['site/women'])?>">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['site/items'])?>">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['site/kids'])?>">Kids</a>
                    </li>

                </ul>
            </div>
            <!-- ! search-cart-nav -->
            <div class="search-cart-nav">
                <ul class="navbar-nav mr-auto right">
                    <li class="nav-item  search">
                        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </li>
                    <!--/.search-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item title3" href="<?=Url::to(['shoes/checkout'])?>">My cart</a>
                        <a class="dropdown-item title3" href="<?=Url::to(['shoes/viewitem'])?>">Checkout</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fa fa-user" aria-hidden="true"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item title3" href="<?=Url::to(['site/login'])?>">Log in</a>
                        <a class="dropdown-item title3" href="<?=Url::to(['site/signup'])?>">Sign up</a>
                        <?php if (Yii::$app->user->can('admin')) {?>
                          <a class="dropdown-item" href="<?=Url::to(['shoes/create'])?>">Add Shoes</a>
                         <?php }?>
                        <div class="dropdown-divider"></div>
                        <a class="fa fa-logout dropdown-item title3" href="<?=Url::to(['site/logout'])?>">Log out</a>
                        </div>
                    </li>
                    <li>
        </li>
                </ul>
            </div>
            <!-- end search -->
        </div>
    </nav>
  <!-- --<navbar end> -->


  <div class="container-fluid mp-5">
    <?=Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])?>
    <?=Alert::widget()?>
    <?=$content?>
  </div>
  <!-- </div> -->

   <!-- newslatter -->
   <div id="subscribe-footer">
<div class="container">
  <div class="left">
<i class="fa fa-envelope-alt"></i>
<h3>hook me up with fashion news!</h3>
<p>Love to read our articles? Sign up now to get fresh content about blogger, SEO, make money, templates directly to your inbox.
	</p>
    </div>
  <i class='icon-chevron-right'></i>
<div id="right">
<form action="" target="popupwindow">
<input class="inptfld" name="email" placeholder=" Your Email" type="text">
<input name="uri" value="techkshetra" type="hidden">
<input name="loc" value="en_US" type="hidden">
<input class="subscribebtn" value="Subscribe Now!" type="submit">
  </form>
</div>
</div>
</div>

  <?=$this->render('footer.php')?>

  <?php $this->endBody()?>

  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" scr="custom.js"></script>


  <script>
$(document).ready(function(){
  var form_count = 1, form_count_form, next_form, total_forms;
  total_forms = $("fieldset").length;
  $(".next").click(function(){

        let previous = $(this).closest("fieldset").attr('id');
        let next = $('#'+this.id).closest('fieldset').next('fieldset').attr('id');
        $('#'+next).show();
        $('#'+previous).hide();
        setProgressBar(++form_count);

  });

  $(".previous").click(function(){

        let current = $(this).closest("fieldset").attr('id');
        let previous = $('#'+this.id).closest('fieldset').prev('fieldset').attr('id');
        $('#'+previous).show();
        $('#'+current).hide();
        setProgressBar(--form_count);

  });
  setProgressBar(form_count);
  function setProgressBar(curStep){
    var percent = parseFloat(100 / total_forms) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");
  }
});
</script>


</body>

</html>
<?php $this->endPage()?>