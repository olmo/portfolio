<?php
/* @var $this ArtistasController */
/* @var $model Artistas */

$this->breadcrumbs=array(
	'Artistas'=>array('index'),
);

?>

<div class="container">

    <h1><?php echo $model->nombre; ?></h1>

    <div class="row">
        <div class="span6">

            <div class="flexslider flexslider-center-mobile" data-plugin-options='{"animation":"slide", "animationLoop": true, "maxVisibleItems": 1}'>
                <ul class="slides">
                    <li>
                        <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/projects/project.jpg">
                    </li>
                    <li>
                        <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/projects/project-1.jpg">
                    </li>
                    <li>
                        <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/projects/project-2.jpg">
                    </li>
                </ul>
            </div>
        </div>

        <div class="span6">

            <h4><strong>Descripción</strong> del artista </h4>
            <?php echo $model->informacion; ?>

        </div>
    </div>

    <hr class="tall" />

    <div class="row">

        <div class="span12">
            <h3><strong>Obras</strong> relacionadas</h3>
        </div>

        <ul class="portfolio-list">
            <li class="span3">
                <div class="portfolio-item thumbnail mobile-max-width">
                    <a href="portfolio-single-project.html" class="thumb-info">
                        <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/projects/project.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">SEO</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
										</span>
                    </a>
                </div>
            </li>
            <li class="span3">
                <div class="portfolio-item thumbnail mobile-max-width">
                    <a href="portfolio-single-project.html" class="thumb-info">
                        <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/projects/project-1.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Red Wine</span>
											<span class="thumb-info-type">Brand</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
										</span>
                    </a>
                </div>
            </li>
            <li class="span3">
                <div class="portfolio-item thumbnail mobile-max-width">
                    <a href="portfolio-single-project.html" class="thumb-info">
                        <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/projects/project-2.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Man Running</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
										</span>
                    </a>
                </div>
            </li>
            <li class="span3">
                <div class="portfolio-item thumbnail mobile-max-width">
                    <a href="portfolio-single-project.html" class="thumb-info">
                        <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/projects/project-3.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Code</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
										</span>
                    </a>
                </div>
            </li>
        </ul>

    </div>

</div>