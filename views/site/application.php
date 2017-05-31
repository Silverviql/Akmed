<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;
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

                            <?php
                            $authors = \app\models\ContactForm::find()->all();
                            // формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
                            $items = ArrayHelper::map($authors,'id','status');
                            $params = [
                                'prompt' => 'Укажите автора записи'
                            ];
                            echo $form->field($model, 'status')->dropDownList($items,$params)
                            ?>

                            <?php
                            $authors = \app\models\ContactForm::find()->all();
                            // формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
                            $items = ArrayHelper::map($authors,'id','status');
                            $params = [
                                'prompt' => 'Укажите автора записи'
                            ];
                            echo $form->field($model, 'status')->dropDownList($items,$params)
                            ?>

                            <?php
                            $authors = \app\models\ContactForm::find()->all();
                            // формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
                            $items = ArrayHelper::map($authors,'id','status');
                            $params = [
                                'prompt' => 'Укажите автора записи'
                            ];
                            echo $form->field($model, 'status')->dropDownList($items,$params)
                            ?>

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
        <div class="col-lg-9  col-md-8  col-sm-8 col-xs-12 col-md-offset-2">
            <div id="map" style="height: 400px "></div>

                <script src="customSet_controls.js" type="text/javascript"></script>

        </div>
    </div>
</div>
<!--/ contact-->

