<?php

/*$this->breadcrumbs=array(
    'Obras'=>array('index'),
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
            <div class="text-muted bootstrap-admin-box-title">Obras</div>
        </div>
        <div class="bootstrap-admin-panel-content">

            <?php echo CHtml::link('Añadir Obra',array('/admin/obras/createObra'), array('class'=>'btn btn-primary')); ?>

            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'obras-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'itemsCssClass'=>'table table-striped',
                'pagerCssClass'=>'',
                'pager'=>array('cssFile'=>false,
                    'htmlOptions'=>array('class'=>'pagination'),
                    'selectedPageCssClass'=>'active',
                    'hiddenPageCssClass'=>'disabled',
                    'internalPageCssClass'=>'',
                    'header'          => '',
                    'firstPageLabel' => '<<',
                    'prevPageLabel'  => '<',
                    'nextPageLabel'  => '>',
                    'lastPageLabel'  => '>>',),

                'columns'=>array(
                    array('name'=>'id', 'value'=>'$data->id','htmlOptions'=>array('width'=>'50px'),),
                    'titulo',
                    array( 'name'=>'artista_search', 'value'=>'$data->idArtista->nombre', 'header'=>'Artista' ),
                    array(
                        'class'=>'CButtonColumn',
                        'template'=>'{editar} {borrar}',
                        'htmlOptions'=>array('class'=>'col-md-2'),
                        'buttons'=>array
                        (
                            'editar' => array
                            (
                                'label'=>'Editar',
                                'url'=>'Yii::app()->createUrl("admin/obras/updateObra", array("id"=>$data->id))',
                            ),
                            'borrar' => array
                            (
                                'label'=>'Borrar',
                                'url'=>'Yii::app()->createUrl("admin/obras/deleteObra", array("id"=>$data->id))',
                                'click'=>'function(){return confirm("¿Seguro que quieres eliminar la obra?");}',
                            ),
                        ),
                    ),
                ),
            )); ?>
        </div>
    </div>
</div>