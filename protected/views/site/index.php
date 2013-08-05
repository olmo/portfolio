<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="slider">
    <ul>
        <li>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home/home.jpg" alt="" class="" style="left: 0px; top: -208.5px;">
        </li>
    </ul>
</div>

<section class="layout center">

<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at turpis nisi, vitae
    ullamcorper elit. Proin rhoncus bibendum sollicitudin. Mauris interdum, erat vitae
    dignissim placerat, nunc elit vehicula elit, in dignissim lacus leo at dolor.
</p>

</section>