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
                    <?php echo CHtml::link('Realizar pedido',array('site/contact')); ?>
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
                    <?php echo CHtml::link('Realizar pedido',array('site/contact')); ?>
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
                    <?php echo CHtml::link('Realizar pedido',array('site/contact')); ?>
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
                    <?php echo CHtml::link('Realizar pedido',array('site/contact')); ?>
                    <!-- <a class="btn btn-large btn-primary" href="#">Realizar pedido</a> -->
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

    <hr class="tall" />

    <h3 class="short"><strong>Cuadros </strong> en promoción</h3>

    <div class="row">

    </div>

</div>

