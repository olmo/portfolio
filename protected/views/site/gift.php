<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Regalos';
$cs=Yii::app()->clientScript;
$cs->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/vendor/jquery.gmap.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/map.js', CClientScript::POS_END);

$this->breadcrumbs=array(
	'Regalos'=>array('gift'),
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

    <div class="row">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gift/bono.jpg" alt="">
    </div>

    <hr class="tall" />

    <h3 class="short"><strong>Cuadros </strong> en promoción</h3>

    <div class="row">

        <ul id="related2" class="portfolio-list">
            <?php
            $data = $related->getData();
            foreach($data as $i => $item)
                Yii::app()->controller->renderPartial('_related', array('index' => $i, 'data' => $item, 'widget' => $this));
            ?>
        </ul>

    </div>

</div>

