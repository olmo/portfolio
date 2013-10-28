<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<div class="container">

    <section class="page-not-found">
        <div class="row">
            <div class="span6 offset1">
                <div class="page-not-found-main">
                    <h2>404 <i class="icon-file"></i></h2>
                    <p><?php echo CHtml::encode($message); ?></p>
                </div>
            </div>
            <div class="span4">
                <h4>Algunos enlaces útiles</h4>
                <ul class="nav nav-list primary">
                    <li><a href="<?php echo Yii::app()->homeUrl; ?>">Inicio</a></li>
                    <li><?php echo CHtml::link('FAQ\'s' ,array('/admin/')); ?></li>
                    <li><?php echo CHtml::link('Sobre Nosotros' ,array('site/about')); ?></li>
                    <li><?php echo CHtml::link('Localización' ,array('site/contact')); ?></li>
                    <li><?php echo CHtml::link('Contacto' ,array('site/contact')); ?></li>
                </ul>
            </div>
        </div>
    </section>

</div>