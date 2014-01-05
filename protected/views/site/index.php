<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - Inicio';
?>

<div role="main" class="main">
<div id="content" class="content full">

<div class="body">
<div class="slider-container">
    <div class="slider" id="revolutionSlider">
        <ul>
            <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slides/home-amsterdam2.jpg" data-fullwidthcentering="on" alt="">
            </li>
            <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slides/home-ny2.jpg" data-fullwidthcentering="on" alt="">
            </li>
            <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/slides/home-ecuacion2.jpg" data-fullwidthcentering="on" alt="">
            </li>
        </ul>
    </div>
</div>

<div class="home-intro">

</div>

<div class="container">

    <div class="row center">
        <div class="span12">
            <h2 class="short"> Donec tellus massa, tristique <strong class="inverted"> condimentum </strong> vel. </h2>

            <p class="featured lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque
                consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie
                vestibulum.
            </p>
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
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-concept-item-1.jpg" alt=""/>
                    <strong>Estrategia</strong>
                </div>
            </div>
            <div class="span2">
                <div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-concept-item-2.jpg" alt=""/>
                    <strong>Planificación</strong>
                </div>
            </div>
            <div class="span2">
                <div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/home-concept-item-3.jpg" alt=""/>
                    <strong>Desarrollo</strong>
                </div>
            </div>
            <div class="span4 offset1">
                <div class="project-image">
                    <div id="fcSlideshow" class="fc-slideshow">
                        <ul class="fc-slides">
                            <li><a href="portfolio-single-project.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/projects/project-home-1.jpg"/></a>
                            </li>
                            <li><a href="portfolio-single-project.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/projects/project-home-2.jpg"/></a>
                            </li>
                            <li><a href="portfolio-single-project.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/projects/project-home-3.jpg"/></a>
                            </li>
                        </ul>
                    </div>
                    <strong class="our-work">Nuestro trabajo</strong>
                </div>
            </div>
        </div>

        <hr class="tall"/>

    </div>
</div>

<div class="container">

    <div class="row center">
        <div class="span12">
            <h2 class="short">Donec tellus massa, tristique <strong> condimentum </strong> vel.</h2>
            <h4 class="lead tall">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</h4>
        </div>
    </div>
    <div class="row center">
        <div class="flexslider unstyled"
             data-plugin-options='{"directionNav":false, "animation":"slide", "slideshow": false, "maxVisibleItems": 6}'>
            <ul class="slides">
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-client-1.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-client-2.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-client-3.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-client-4.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-client-5.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-client-6.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-client-4.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="span2">
                        <img class="mobile-max-width small" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-client-2.jpg" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
</div>
