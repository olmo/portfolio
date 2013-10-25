<?php

$this->breadcrumbs=array(
    'Fotos'=>array('index'),
    $tipoP=>array('index'),
);

?>

<h3><?php echo CHtml::link('Añadir '.$tipoS,array('/admin/obras/create/tipo/'.$tipo)); ?></h3>

<table class="table table-striped">
    <tbody>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_viewCaracteristicas',
        'template'=>"{items}",
        'viewData'=>array('tipo'=>$tipo),
    )); ?>
    </tbody>
</table>
