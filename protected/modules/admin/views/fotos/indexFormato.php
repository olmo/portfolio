<?php

$this->breadcrumbs=array(
    'Fotos'=>array('index'),
    'Formatos'=>array('index'),
);

?>

<h3><?php echo CHtml::link('Añadir Formato',array('/admin/fotos/createFormato')); ?></h3>

<table cellpadding="0" cellspacing="0">
    <tbody>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_viewCaracteristicas',
        'template'=>"{items}",
        'viewData'=>array('tipo'=>'formato'),
    )); ?>
    </tbody>
</table>
