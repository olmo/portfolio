<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
$cs=Yii::app()->clientScript;
$cs->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/vendor/jquery.gmap.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/map.js', CClientScript::POS_END);

$this->breadcrumbs=array(
	'Contacto',
);
?>

<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php if(isset($this->breadcrumbs)):?>
                    <ul class="breadcrumb">
                        <?php $this->widget('ext.CBreadcrumbs', array(
                            'links'=>$this->breadcrumbs,
                            'separator'=>''
                        )); ?>
                    </ul>
                <?php endif?>
            </div>
        </div>
        <?php if(isset($this->titulo)):?>
            <div class="row">
                <div class="span12">
                    <h2><?php echo $this->titulo; ?></h2>
                </div>
            </div>
        <?php endif?>
    </div>
</section>

<div class="container">

    <h2>Cheques <strong> regalo </strong> </h2>

    <div class="row">
        <div class="span12">
            <p class="lead">
                Elije tu <span class="alternative-font">cheque regalo</span> o personaliza tu oferta y contacta con nosotros.
            </p>
        </div>
    </div>

    <hr class="tall" />

    <h3 class="short"><strong>Cuatro </strong> cheques</h3>

    <div class="row">

        <div class="pricing-table">
            <div class="span3">
                <div class="plan">
                    <h3>Básico<span>59 €</span></h3>
                    <a class="btn btn-large btn-primary" href="#">Realizar pedido</a>
                    <ul>
                        <li><b>10</b> Lore ipsum</li>
                        <li><b>100</b> Lore ipsum</li>
                        <li><b>30</b> Lore ipsum</li>
                        <li><b>10</b> Lore ipsum</li>
                    </ul>
                </div>
            </div>
            <div class="span3 center">
                <div class="plan most-popular">
                    <div class="plan-ribbon-wrapper"><div class="plan-ribbon">Popular</div></div>
                    <h3>Profesional<span>29 €</span></h3>
                    <a class="btn btn-large btn-primary" href="#">Realizar pedido</a>
                    <ul>
                        <li><b>10</b> Lore ipsum</li>
                        <li><b>100</b> Lore ipsum</li>
                        <li><b>30</b> Lore ipsum</li>
                        <li><b>10</b> Lore ipsum</li>
                    </ul>
                </div>
            </div>
            <div class="span3">
                <div class="plan">
                    <h3>Estándar<span>17 €</span></h3>
                    <a class="btn btn-large btn-primary" href="#">Realizar pedido</a>
                    <ul>
                        <li><b>10</b> Lore ipsum</li>
                        <li><b>100</b> Lore ipsum</li>
                        <li><b>30</b> Lore ipsum</li>
                        <li><b>10</b> Lore ipsum</li>
                    </ul>
                </div>
            </div>
            <div class="span3">
                <div class="plan">
                    <h3>Mixto<span>9 €</span></h3>
                    <a class="btn btn-large btn-primary" href="#">Realizar pedido</a>
                    <ul>
                        <li><b>10</b> Lore ipsum</li>
                        <li><b>100</b> Lore ipsum</li>
                        <li><b>30</b> Lore ipsum</li>
                        <li><b>10</b> Lore ipsum</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

<div class="row">

        <div class="span6">

            <h2 class="short"><strong>Envíenos</strong> un Email</h2>

            <!-- Contact form -->
            <?php if(Yii::app()->user->hasFlash('contact')): ?>

                <div class="alert alert-success">
                    <?php echo Yii::app()->user->getFlash('contact'); ?>
                </div>

            <?php else: ?>
                <p class="note">Los campos con <span style="color: red;">*</span> son obligatorios.</p>

                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'contact-form',
                    'enableClientValidation'=>true,
                    'clientOptions'=>array(
                        'validateOnSubmit'=>true,
                    ),
                )); ?>

                    <?php if($model->hasErrors()): ?>
                        <div class="alert alert-block alert-error fade in">
                            <h4 class="alert-heading">Errores</h4>
                                <?php echo $form->errorSummary($model); ?>
                        </div>
                    <?php endif; ?>

                    <div class="row controls">
                        <div class="span3 control-group">
                            <?php echo $form->labelEx($model,'name'); ?>
                            <?php echo $form->textField($model,'name', array('class'=>'span3')); ?>
                        </div>

                        <div class="span3 control-group">
                            <?php echo $form->labelEx($model,'email'); ?>
                            <?php echo $form->textField($model,'email', array('class'=>'span3')); ?>
                        </div>
                    </div>

                    <div class="row controls">
                        <div class="span6 control-group">
                            <?php echo $form->labelEx($model,'subject'); ?>
                            <?php echo $form->textField($model,'subject',array('size'=>100,'maxlength'=>128, 'class'=>'span6')); ?>
                        </div>
                    </div>

                    <div class="row controls">
                        <div class="span6 control-group">
                            <?php echo $form->labelEx($model,'body'); ?>
                            <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50, 'class'=>'span6')); ?>
                        </div>
                    </div>

                    <?php if(CCaptcha::checkRequirements()): ?>
                        <div class="row controls">
                            <div class="span6 control-group">
                                <?php echo $form->labelEx($model,'verifyCode'); ?>
                                <div><?php $this->widget('CCaptcha'); ?></div>
                                <?php echo $form->textField($model,'verifyCode'); ?>
                                <div class="hint">Por favor, introduzca las letras que se muestran en la imagen de arriba.
                                    <br/>Las letras no distinguen entre mayúsculas y minúsculas.
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <br/>

                    <div>
                        <?php echo CHtml::submitButton('Enviar', array('class' => 'btn btn-primary btn-large')); ?>
                        <!-- <p class="status"></p> -->
                    </div>
                <?php $this->endWidget(); ?>

            <?php endif; ?>
        </div>
    </div>

</div>

