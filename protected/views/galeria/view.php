<?php
/* @var $this GaleriaController */
/* @var $model Foto */

?>

<div class="slider portfolio_slider animation_slide" data-animation="slide" data-controls="1">
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
