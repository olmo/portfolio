<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="slider">
    <ul>
        <li>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/login/login.jpg" alt="" class="" style="left: 0px; top: -208.5px;">
        </li>
    </ul>
</div>

<section class="layout center"><div class="form">

    <h1>Login</h1>

    <p>Por favor complete el siguiente formulario con sus datos de acceso:</p>

    <div class="clearfix"></div>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <p class="note">Los campos con <span style="color: red;">*</span> son obligatorios.</p>

    <div class="row">
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username'); ?>
        <?php echo $form->error($model,'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password'); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row rememberMe">
        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe', array('class' => 'recordar', 'style' => 'display:inline;')); ?>
        <?php echo $form->error($model,'rememberMe'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Entrar', array('class' => 'button')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div></section>
