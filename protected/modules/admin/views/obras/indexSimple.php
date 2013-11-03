<?php

/*$this->breadcrumbs=array(
    'Fotos'=>array('index'),
    $tipoP=>array('index'),
);*/

?>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="text-muted bootstrap-admin-box-title"><?php echo CHtml::encode($tipoS); ?></div>
        </div>
        <div class="bootstrap-admin-panel-content">
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
        </div>
    </div>
</div>
