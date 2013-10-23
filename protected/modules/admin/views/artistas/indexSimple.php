<?php

$this->breadcrumbs=array(
    'Categorias'=>array('index'),
    $tipoP=>array('index'),
);

?>

<h3><?php echo CHtml::link('Añadir '.$tipoS,array('/admin/artistas/create/tipo/'.$tipo)); ?></h3>

<table cellpadding="0" cellspacing="0">
    <tbody>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_viewCaracteristicas',
        'template'=>"{items}",
        'viewData'=>array('tipo'=>$tipo),
    )); ?>
    </tbody>
</table>
