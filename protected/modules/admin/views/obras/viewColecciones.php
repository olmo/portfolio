<?php

/*$this->breadcrumbs=array(
    'Fotos'=>array('index'),
    $tipoP=>array('index'),
);*/

?>

<div class="row">
    <?php if(Yii::app()->user->hasFlash('exito')): ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo Yii::app()->user->getFlash('exito'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="text-muted bootstrap-admin-box-title"><?php echo CHtml::encode($tipoS); ?></div>
        </div>
        <div class="bootstrap-admin-panel-content">
            <?php echo CHtml::link('Añadir '.$tipoS,array('/admin/obras/createColeccion'), array('class'=>'btn btn-primary')); ?>
            <p></p>
            <table class="table table-striped">
                <tbody>
                <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_viewColecciones',
                    'template'=>"{items}",
                )); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
