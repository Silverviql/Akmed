<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<!--contact-->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="ser-title"><?= Yii::t('main', 'Doctor\'s appointment')?></h2>
                <hr class="botm-line">
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>    <?= Yii::t('main', 'An appointment with a doctor')?></h3>
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
                        <?= Yii::t('main', 'Medical organization for appointment.')?>
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

<div class="container">
    <div class="row">
        <div class="col-lg-8  col-md-8  col-sm-8 col-xs-12 col-md-offset-2">
            <div id="map" style=" height: 400px"></div>
            <script type="text/javascript">
                ymaps.ready(init);
                var myMap,
                    myPlacemark;
                function init(){
                    myMap = new ymaps.Map("map", {
                        center: [55.79, 49.10],
                        zoom: 7
                    });

                    myPlacemark = new ymaps.Placemark([55.79, 49.10], {
                        hintContent: 'Казань!',
                        balloonContent: 'Столица Татарстана'
                    });


                    myMap.geoObjects.add(myPlacemark);
                }
            </script>
        </div>
    </div>
</div>
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
