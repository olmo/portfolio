<?php
/* @var $this GaleriaController */
/* @var $model Foto */

/*
 * <div class="slider portfolio_slider animation_slide" data-animation="slide" data-controls="1">
    <ul>
        <?php foreach ($model->elementosImagenes as $imagen): ?>
            <li>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/galeria/<?php echo $model->id; ?>/<?php echo $imagen->nombre; ?>" alt="">
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<section class="portfolio_description layout left">
    <div class="skew"></div>
    <a href="#" class="hide"></a>

    <h2><?php echo $model->nombre; ?></h2>
    <?php echo $model->descripcion; ?>
</section>

 */

?>




<h2><?php echo $model->titulo; ?></h2>

<div class="row">
    <div class="span6">
        <a class="thumbnail lightbox pull-left" href="<?php echo Yii::app()->request->baseUrl; ?>/images/fotos/<?php echo $model->imagen; ?>" data-plugin-options='{"type":"image"}'>
            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/fotos/<?php echo $model->imagen; ?>">
            <span class="zoom"><i class="icon-16 icon-white-shadowed icon-search"></i></span>
        </a>
    </div>

    <div class="span6">

        <h4>Project <strong>Description</strong></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elit mattis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

        <a href="#" class="btn btn-primary">Live Preview</a> <span class="arrow hlb hidden-phone" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>

        <h4 class="pull-top">Services</h4>

        <ul class="list icons unstyled">
            <li><i class="icon-ok"></i> Design</li>
            <li><i class="icon-ok"></i> HTML/CSS</li>
            <li><i class="icon-ok"></i> Javascript</li>
            <li><i class="icon-ok"></i> Backend</li>
        </ul>

    </div>
</div>

<hr class="tall" />

<div class="row">

    <div class="span12">
        <h3>Obras <strong>relacionadas</strong></h3>
    </div>

    <ul class="portfolio-list">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$related,
            'itemView'=>'_related',
            'template'=>"{items}"
        )); ?>
    </ul>

</div>