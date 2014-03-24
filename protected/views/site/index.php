<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - Inicio';
?>

<div role="main" class="main">
<div id="content" class="content full">

<div class="body">
<div class="slider-container">
    <div class="slider" id="revolutionSlider">
        <!--
        <ul>
            <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                <img src="<?php //echo Yii::app()->request->baseUrl; ?>/img/slides/home-amsterdam2.jpg" data-fullwidthcentering="on" alt="">
            </li>
            <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                <img src="<?php //echo Yii::app()->request->baseUrl; ?>/img/slides/home-ny2.jpg" data-fullwidthcentering="on" alt="">
            </li>
            <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                <img src="<?php //echo Yii::app()->request->baseUrl; ?>/img/slides/home-ecuacion2.jpg" data-fullwidthcentering="on" alt="">
            </li>
        </ul>
        -->

        <ul>
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_view',
                'enableSorting'=>false,
                'template'=>"{items}"
            )); ?>
        </ul>
    </div>
</div>

<div class="home-intro">

</div>

<div class="container">

    <div class="row center">
        <div class="span12">
            <h2 class="short"> Descubre nuestro <a href="<?php echo Yii::app()->createUrl('site/gift'); ?>"><strong class="inverted"> Cheque Regalo </strong></a><br/>la mejor forma
                de obsequiar con algo exclusivo. </h2>
        </div>
    </div>

</div>

<div class="home-concept">
    <div class="container">

        <div class="row center">
            <span class="sun"></span>
            <span class="cloud"></span>

            <div class="span2 offset1">
                <div class="process-image" data-appear-animation="bounceIn">
                    <a href="<?php echo Yii::app()->createUrl('artistas/index'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/artistas.jpg" alt=""/>
                    <strong>Artistas</strong></a>
                </div>
            </div>
            <div class="span2">
                <div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
                    <a href="<?php echo Yii::app()->createUrl('galeria/colecciones'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/colecciones.jpg" alt=""/>
                    <strong>Colecciones</strong></a>
                </div>
            </div>
            <div class="span2">
                <div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
                    <a href="<?php echo Yii::app()->createUrl('site/contact'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/contacto.jpg" alt=""/>
                    <strong>Contacto</strong></a>
                </div>
            </div>
            <div class="span4 offset1">
                <div class="project-image">
                    <div id="fcSlideshow" class="fc-slideshow">
                        <ul class="fc-slides">
                            <li><a href="<?php echo Yii::app()->createUrl('galeria/index'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/galeria.jpg"/></a></li>
                            <li><a href="<?php echo Yii::app()->createUrl('galeria/index'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/galeria2.jpg"/></a></li>
                        </ul>
                    </div>
                    <a href="<?php echo Yii::app()->createUrl('galeria/index'); ?>"><strong class="our-work">Galería</strong></a>
                </div>
            </div>
        </div>

        <hr class="tall"/>

    </div>
</div>

<div class="container">

    <div class="row center">
        <div class="span12">
            <h4 class="lead tall">Incluso los objetos más familiares, al ser observados en sus más intimos detalles, nos producen nuevas perspectivas.</h4>
            <p>Bienvenidos al espacio virtual de Global-Art, la puerta de acceso a un mundo nuevo para los amantes
            de la obra gráfica contemporanea.</p>
            <p> Navega por nuestras seleccionadas colecciones y adentrate en un universo apasionante creado con la cabeza, los ojos y el corazón.<p>
        </div>
    </div>
    <div class="row center">
        <div class="span2"></div>
        <div class="span8">
        <div class="flexslider unstyled"
             data-plugin-options='{"directionNav":false, "animation":"slide", "slideshow": false, "maxVisibleItems": 3}'>
            <ul class="slides">
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-b1.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-b2.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-b3.jpg" alt="">
                    </div>
                </li>
            </ul>
        </div>
        </div>
        <div class="span2"></div>
    </div>
</div>
</div>
</div>
</div>
