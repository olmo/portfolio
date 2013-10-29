<?php

/*$this->breadcrumbs=array(
    'Fotos'=>array('index'),
    $tipoP=>array('index'),
);*/

?>

<?php echo CHtml::link('Añadir '.$tipoS,array('/admin/obras/create/tipo/'.$tipo), array('class'=>'btn btn-primary')); ?>
<p></p>

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
