<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>
<?php if (Yii::$app->user->isGuest): ?>
<? $this->title = 'Форма входа';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login" style="padding: 200px;">
    <h1><?= Html::encode($this->title) ?></h1>

<?        $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Залогиниться', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end();?>
        <? else:?>
        <?= $this->render('common') ?>

<!--    <div style="padding: 200px; ">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +7 921 38 57567</a></li>
                                <li><a href="mailto: usikov.ma@yandex.ru"><i class="fa fa-envelope"></i> usikov.ma@yandex.ru</a></li>
                            </ul>-->
    <?
   /* echo \yii\helpers\Html::a('Button','#',['class'=>'btn btn-lg btn-success','style'=>'margin: 20px;']);
    echo \yii\helpers\Html::a('Button','#',['class'=>'btn btn-lg btn-default','style'=>'margin: 20px;']);
    echo \yii\helpers\Html::a('Button','#',['class'=>'btn btn-lg btn-danger','style'=>'margin: 20px;']);
    echo \yii\helpers\Html::a('Button','#',['class'=>'btn btn-lg btn-primary','style'=>'margin: 20px;']);
    echo \yii\helpers\Html::a('Button','#',['class'=>'btn btn-lg btn-success','style'=>'margin: 20px;']);*/

    ?><? endif; ?>


<?