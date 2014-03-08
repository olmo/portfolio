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

    <?php if (!empty($results)): ?>
        <?php foreach($results as $result):
            ?>
            <p>Nombre: <?php echo $query->highlightMatches(CHtml::encode($result->nombre)); ?></p>
            <p>Informacion: <?php echo $query->highlightMatches(CHtml::encode($result->informacion)); ?></p>
            <p>Categoria: <?php echo $query->highlightMatches(CHtml::encode($result->categoria)); ?></p>
            <hr/>
        <?php endforeach; ?>

    <?php else: ?>
        <p class="error">No se han encontrado resultados para el término introducido.</p>
    <?php endif; ?>

        <h3> Obras </h3>

    <?php if (!empty($results2)): ?>
        <?php foreach($results2 as $result2):
            ?>
            <p>Titulo: <?php echo $query2->highlightMatches(CHtml::encode($result2->titulo)); ?></p>
            <p>Descripcion: <?php echo $query2->highlightMatches(CHtml::encode($result2->descripcion)); ?></p>
            <hr/>
        <?php endforeach; ?>

    <?php else: ?>
        <p class="error">No se han encontrado resultados para el término introducido.</p>
    <?php endif; ?>

</div>
