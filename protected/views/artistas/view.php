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
                    <?php if ($model->imgslide1 != NULL) :?>
                        <li>
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/artistas/slides/<?php echo $model->imgslide1?>">
                        </li>
                    <?php endif; ?>
                    <?php if ($model->imgslide2 != NULL) :?>
                    <li>
                        <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/artistas/slides/<?php echo $model->imgslide2?>">

                    </li>
                    <?php endif; ?>
                    <?php if ($model->imgslide3 != NULL) :?>
                    <li>
                        <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/artistas/slides/<?php echo $model->imgslide3?>">
                    </li>
                    <?php endif; ?>
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

            <?php
            $data = $related->getData();
            foreach($data as $i => $item)
                Yii::app()->controller->renderPartial('_related', array('index' => $i, 'data' => $item, 'widget' => $this));
            ?>

        </ul>

    </div>

</div>