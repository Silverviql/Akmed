<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;;
use yii\bootstrap\ActiveForm;
use cybercog\yii\googleanalytics\widgets\GATracking;


AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <!-- гугл аналитик-->
        <?= GATracking::widget([
            'trackingId' => '(UA-98500405-1',
        ]) ?>

    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <?php $this->beginBody() ?>

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
    <!--service-->
    <section id="service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h2 class="ser-title"><?= Yii::t('main', 'Our Service')?></h2>
                    <hr class="botm-line">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris cillum.</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-info">
                        <div class="icon">
                            <i class="fa fa-stethoscope"></i>
                        </div>
                        <div class="icon-info">
                            <h4><?= Yii::t('main', '24 Hour Support')?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="service-info">
                        <div class="icon">
                            <i class="fa fa-ambulance"></i>
                        </div>
                        <div class="icon-info">
                            <h4><?= Yii::t('main', 'Emergency Services')?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-info">
                        <div class="icon">
                            <i class="fa fa-user-md"></i>
                        </div>
                        <div class="icon-info">
                            <h4><?= Yii::t('main', 'Medical Counseling')?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="service-info">
                        <div class="icon">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <div class="icon-info">
                            <h4><?= Yii::t('main', 'Premium Healthcare')?></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ service-->
    <!--cta-->
    <section id="cta-1" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="schedule-tab">
                    <div class="col-md-4 col-sm-4 bor-left">
                        <div class="mt-boxy-color"></div>
                        <div class="medi-info">
                            <h3><?= Yii::t('main', 'Emergency Case')?></h3>
                            <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href="#" class="medi-info-btn">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="medi-info">
                            <h3><?= Yii::t('main', 'Emergency Case')?></h3>
                            <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <a href="#" class="medi-info-btn">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 mt-boxy-3">
                        <div class="mt-boxy-color"></div>
                        <div class="time-info">
                            <h3><?= Yii::t('main', 'Opening Hours')?></h3>
                            <table style="margin: 8px 0px 0px;" border="1">
                                <tbody>
                                <tr>
                                    <td>Monday - Friday</td>
                                    <td>8.00 - 17.00</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>9.30 - 17.30</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>9.30 - 15.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="section-title">
                        <h2 class="head-title lg-line"><?= Yii::t('main', 'The Medilap')?> <br><?= Yii::t('main', 'Ultimate Dream')?></h2>
                        <hr class="botm-line">
                        <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                        <a href="" style="color: #0cb8b6; padding-top:10px;"><?= Yii::t('main', 'Know more..')?></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div style="visibility: visible;" class="col-sm-9 more-features-box">
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                            <div class="more-features-box-text-description">
                                <h3><?= Yii::t('main', 'It\'s something important you want to know.')?></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
                            <div class="more-features-box-text-description">
                                <h3>It's something important you want to know.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ about-->
    <!--doctor team-->
    <section id="doctor-team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="ser-title"><?= Yii::t('main', 'Meet Our Doctors!')?></h2>
                    <hr class="botm-line">
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                        <img src="/img/doctor1.jpg" alt="..." class="team-img">
                        <div class="caption">
                            <h3><?= Yii::t('main', 'Jessica Wally')?></h3>
                            <p><?= Yii::t('main', 'Doctor')?></p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                        <img src="/img/doctor2.jpg" alt="..." class="team-img">
                        <div class="caption">
                            <h3>Iai Donas</h3>
                            <p>Doctor</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                        <img src="/img/doctor3.jpg" alt="..." class="team-img">
                        <div class="caption">
                            <h3>Amanda Denyl</h3>
                            <p>Doctor</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="thumbnail">
                        <img src="/img/doctor4.jpg" alt="..." class="team-img">
                        <div class="caption">
                            <h3>Jason Davis</h3>
                            <p>Doctor</p>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ doctor team-->
    <!--testimonial-->
    <section id="testimonial" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="ser-title"><?= Yii::t('main', 'see what patients are saying?')?></h2>
                    <hr class="botm-line">
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="testi-details">
                        <!-- Paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="testi-info">
                        <!-- User Image -->
                        <a href="#"><img src="/img/thumb.png" alt="" class="img-responsive"></a>
                        <!-- User Name -->
                        <h3><?= Yii::t('main', 'Alex')?><span><?= Yii::t('main', 'Texas')?></span></h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="testi-details">
                        <!-- Paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="testi-info">
                        <!-- User Image -->
                        <a href="#"><img src="/img/thumb.png" alt="" class="img-responsive"></a>
                        <!-- User Name -->
                        <h3>Alex<span>Texas</span></h3>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="testi-details">
                        <!-- Paragraph -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="testi-info">
                        <!-- User Image -->
                        <a href="#"><img src="/img/thumb.png" alt="" class="img-responsive"></a>
                        <!-- User Name -->
                        <h3>Alex<span>Texas</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ testimonial-->
    <!--cta 2-->
    <section id="cta-2" class="section-padding">
        <div class="container">
            <div class=" row">
                <div class="col-md-2"></div>
                <div class="text-right-md col-md-4 col-sm-4">
                    <h2 class="section-title white lg-line"><?= Yii::t('main', '« A few words')?><br><?= Yii::t('main', 'about us »')?> </h2>
                </div>
                <div class="col-md-4 col-sm-5">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typek
                    <p class="text-right text-primary"><i>— Medilap Healthcare</i></p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--contact-->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="ser-title"><?= Yii::t('main', 'Contact us')?></h2>
                    <hr class="botm-line">
                </div>
                <div class="col-md-4 col-sm-4">
                    <h3>    <?= Yii::t('main', 'Contact Info')?></h3>
                    <div class="space"></div>
                    <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i><?= Yii::t('main', '321 Awesome Street')?><br>
                        <?= Yii::t('main', 'New York, NY 17022')?></p>
                    <div class="space"></div>
                    <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i><?= Yii::t('main', 'info@companyname.com')?></p>
                    <div class="space"></div>
                    <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+1 800 123 1234</p>
                </div>
                <div class="col-md-8 col-sm-8 marb20">

                    <div class="site-contact">

                            <p>
                                <?= Yii::t('main', 'If you have business inquiries or other questions, please fill out the following form to contact us.
                                Thank you.')?>
                            </p>

                            <div class="row">
                                <div class="col-lg-5">

                                    <?php if( Yii::$app->session->hasFlash('success') ): ?>
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <?php echo Yii::$app->session->getFlash('success'); ?>
                                        </div>
                                    <?php endif;?>

                                    <?php if( Yii::$app->session->hasFlash('error') ): ?>
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <?php echo Yii::$app->session->getFlash('error'); ?>
                                        </div>
                                    <?php endif;?>

                                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                                    <?= $form->field($model, 'name') ?>    <!--)->textInput(['autofocus' => true] автофокус на поле имя-->

                                    <?= $form->field($model, 'email') ?>

                                    <?= $form->field($model, 'subject') ?>


                                    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

                                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>

                                    <?php ActiveForm::end(); ?>

                                </div>
                            </div>
                      </div>
                    </div>
                </div>


            <div class="container">
                <div class="window_wrap">

                    <div class="window">

                        <div class="window_close">X</div>
                        <p>Оставьте ваш телефон<br/>и наш консультант свяжется с вами</p>

                        <form id="backPhone" name="backPhone">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input name="telephone" type="Tel" id="telForm" maxlength="20" placeholder="Ваш телефон"/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <button id="telButton" type="submit" form="backPhone">Заказать звонок</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            <div class="telButton anim">

                <div class="telButton_border"></div>
                <div class="telButton_background"><span></span></div>
                <div class="telButton_hover">Заказать звонок</div>

            </div>
            </div>
        </section>
        <!--/ contact-->
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