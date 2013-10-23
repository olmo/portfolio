<?php

$this->breadcrumbs=array(
    'Fotos'=>array('index'),
);

?>

<h3><?php echo CHtml::link('Añadir Foto',array('/admin/fotos/createFoto')); ?></h3>

<table cellpadding="0" cellspacing="0">
    <tbody>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_viewFotos',
        'template'=>"{items}",
    )); ?>
    </tbody>
</table>
