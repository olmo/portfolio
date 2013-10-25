<?php

$this->breadcrumbs=array(
    'Obras'=>array('index'),
);

?>

<h3><?php echo CHtml::link('Añadir Obra',array('/admin/obras/createObra')); ?></h3>

<table class="table table-striped">
    <tbody>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_viewObras',
        'template'=>"{items}",
    )); ?>
    </tbody>
</table>
