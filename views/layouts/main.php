<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <!--banner-->
        <section id="banner" class="banner">
            <div class="bg-color">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"><img src="/img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
                            </div>
                            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#banner"><?= Yii::t('main', 'Home')?></a></li>
                                    <li class=""><a href="#service"><?= Yii::t('main', 'Services')?></a></li>
                                    <li class=""><a href="#about"><?= Yii::t('main', 'About')?></a></li>
                                    <li class=""><a href="#testimonial"><?= Yii::t('main', 'Testimonial')?></a></li>
                                    <li class=""><a href="#contact"><?= Yii::t('main', 'Contact')?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="banner-info">
                            <div class="banner-logo text-center">
                                <img src="/img/logo.png" class="img-responsive">
                            </div>
                            <div class="banner-text text-center">
                                <h1 class="white"><?= Yii::t('main', 'Healthcare at your desk!!')?></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#contact" class="btn btn-appoint"><?= Yii::t('main', 'Make an Appointment.')?></a>
                            </div>
                            <div class="overlay-detail text-center">
                                <a href="#service"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?= \app\widgets\LangWidget::widget();?>
        <!--/ banner-->

        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-98500405-1', 'auto');
            ga('send', 'pageview');
        </script>

        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    </head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php $this->beginBody() ?>
<?= $content ?>

<!--footer-->
<footer id="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding"><?= Yii::t('main', 'About Us')?></h4>
                    </div>
                    <div class="info-sec">
                        <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding"><?= Yii::t('main', 'Quick Links')?></h4>
                    </div>
                    <div class="info-sec">
                        <ul class="quick-info">
                            <li><a href="index.html"><i class="fa fa-circle"></i><?= Yii::t('main', 'Home')?></a></li>
                            <li><a href="#service"><i class="fa fa-circle"></i><?= Yii::t('main', 'Service')?></a></li>
                            <li><a href="#contact"><i class="fa fa-circle"></i><?= Yii::t('main', 'Appointment')?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 marb20">
                    <div class="ftr-tle">
                        <h4 class="white no-padding"><?= Yii::t('main', 'Follow us')?></h4>
                    </div>
                    <div class="info-sec">
                        <ul class="social-icon">
                            <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                            <li class="bgred"><i class="fa fa-google-plus"></i></li>
                            <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                            <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-line">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?= Yii::t('main', '© Copyright Medilab Theme. All Rights Reserved')?>
                    <div class="credits">
                        <!--
                            All the links in the footer should remain intact.
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
                        -->
                        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer-->
<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>
