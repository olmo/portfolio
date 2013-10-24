<?php

$this->breadcrumbs=array(
    'Artistas'=>array('index'),
);

?>

<h3><?php echo CHtml::link('Añadir Artista',array('/admin/artistas/createArtista')); ?></h3>

<table cellpadding="0" cellspacing="0">
    <tbody>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_viewArtistas',
        'template'=>"{items}",
    )); ?>
    </tbody>
</table>
