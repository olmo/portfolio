<?php

$this->breadcrumbs=array(
    'Fotos'=>array('index'),
    'Tamaños'=>array('index'),
);

?>

<h3><?php echo CHtml::link('Añadir Tamaño',array('/admin/fotos/createTamano')); ?></h3>

<table cellpadding="0" cellspacing="0">
    <tbody>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_viewCaracteristicas',
        'template'=>"{items}",
        'viewData'=>array('tipo'=>'tamano'),
    )); ?>
    </tbody>
</table>
