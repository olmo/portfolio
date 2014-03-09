<?php
$this->pageTitle=Yii::app()->name . ' - Búsqueda';
$this->breadcrumbs=array(
    'Búsqueda'=>array('index'),
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

    <h2>Resultados para: "<?php echo CHtml::encode($term); ?>"</h2>

    <h3> Artistas </h3>

    <div class="row">
        <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
            <?php if (!empty($results)): ?>
                <?php foreach($results as $result):

                    // $criteria = new CDbCriteria;
                    // $criteria->condition = 'nombre='.CHtml::encode($result->nombre);
                    // $model = Artistas::model()->find($criteria);
                ?>

                    <!--
                    <p>ID: <?php //echo $result->id; ?></p>
                    <p>Nombre: <?php //echo $query->highlightMatches(CHtml::encode($result->nombre)); ?></p>
                    <p>Información: <?php //echo $query->highlightMatches(CHtml::encode($result->informacion)); ?></p>
                    <p>Categoria: <?php //echo $query->highlightMatches(CHtml::encode($result->id)); ?></p>
                    -->

                    <?php
                        $artistas = Artistas::model()->findAll();

                        foreach($artistas as $artista):
                    ?>
                        <?php
                            $pos = strpos($artista->nombre, $result->nombre);

                            if ($pos !== false): ?>

                            <li class="span2">
                                <div class="portfolio-item thumbnail mobile-max-width">
                                    <a href="<?php echo $this->createUrl('artistas/view', array('id'=>$artista->id)); ?>" class="thumb-info">
                                        <div class="centerthumbs"><span></span>
                                            <img alt="" style="max-height: 180px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/artistas/<?php echo $artista->imagen; ?>">
                                        </div>

                                        <span class="thumb-info-action">
                                            <span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner"><?php echo CHtml::encode($artista->nombre); ?></span>
                                                <span class="thumb-info-type"><?php echo CHtml::encode($artista->idCategoria->nombre); ?></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>

                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>

            <?php else: ?>
                <p>No se han encontrado resultados para el término introducido.</p>
            <?php endif; ?>
        </ul>
    </div>

    <hr/>

    <h3> Obras </h3>

    <div class="row">
        <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
            <?php if (!empty($results2)): ?>
                <?php foreach($results2 as $results2):

                    // $criteria = new CDbCriteria;
                    // $criteria->condition = 'nombre='.CHtml::encode($result->nombre);
                    // $model = Artistas::model()->find($criteria);
                    ?>

                    <!--
                    <p>ID: <?php //echo $result->id; ?></p>
                    <p>Nombre: <?php //echo $query->highlightMatches(CHtml::encode($result->nombre)); ?></p>
                    <p>Información: <?php //echo $query->highlightMatches(CHtml::encode($result->informacion)); ?></p>
                    <p>Categoria: <?php //echo $query->highlightMatches(CHtml::encode($result->id)); ?></p>
                    -->

                    <?php
                        $obras = Obra::model()->findAll();

                        foreach($obras as $obra):
                    ?>
                        <?php
                            $pos = strpos($obra->titulo, $results2->titulo);

                            if ($pos !== false): ?>

                            <li class="span2">
                                <div class="portfolio-item thumbnail mobile-max-width">
                                    <a href="<?php echo $this->createUrl('galeria/view', array('id'=>$obra->id)); ?>" class="thumb-info">
                                        <div class="centerthumbs"><span></span>
                                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/thumbs/<?php echo $obra->imagen; ?>">
                                        </div>

                                        <span class="thumb-info-action">
                                            <span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner"><?php echo CHtml::encode($obra->titulo); ?></span>
                                                <span class="thumb-info-type"><?php echo CHtml::encode($obra->idArtista->nombre); ?></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </li>

                            <?php break 1; endif; ?>
                        <?php endforeach; ?>
                <?php endforeach; ?>

            <?php else: ?>
                <p>No se han encontrado resultados para el término introducido.</p>
            <?php endif; ?>
        </ul>
    </div>

</div>
