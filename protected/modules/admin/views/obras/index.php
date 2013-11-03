<?php

/*$this->breadcrumbs=array(
    'Obras'=>array('index'),
);*/

?>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="text-muted bootstrap-admin-box-title">Obras</div>
        </div>
        <div class="bootstrap-admin-panel-content">

            <?php echo CHtml::link('Añadir Obra',array('/admin/obras/createObra'), array('class'=>'btn btn-primary')); ?>

            <p></p>

            <table class="table table-striped">
                <thead>
                <tr><th>Título</th><th>Artista</th><th>Acciones</th></tr>
                </thead>
                <tbody>
                <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_viewObras',
                    'template'=>"{items}",
                )); ?>
                </tbody>

                <?php /*$this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'obras-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'itemsCssClass'=>'table table-striped',
                    'template'=>'{editar}{borrar}',
                    'buttons'=>array
                    (
                        'editar' => array
                        (
                            'label'=>'Editar',
                            'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
                            'url'=>Yii::app()->createUrl("obras/updateObra", array("id"=>$data->id)),
                        ),
                        'borrar' => array
                        (
                            'label'=>'Borrar',
                            'url'=>'"#"',
                            'visible'=>'$data->score > 0',
                            'click'=>'function(){alert("Going down!");}',
                        ),
                    ),
                    'columns'=>array(
                        'id',
                        'titulo',
                        'fecha_publicacion',
                        'id_artista',
                        array(
                            'class'=>'CButtonColumn',
                        ),
                    ),
                ));*/ ?>
            </table>

            <div class="text-center">
            <?php $this->widget('CLinkPager', array('pages' => $dataProvider->pagination,
                'cssFile'=>false,
                'htmlOptions'=>array('class'=>'pagination'),
                'selectedPageCssClass'=>'active',
                'hiddenPageCssClass'=>'disabled',
                'internalPageCssClass'=>'',
                'header'          => '',
                'firstPageLabel' => '<<',
                'prevPageLabel'  => '<',
                'nextPageLabel'  => '>',
                'lastPageLabel'  => '>>',
            )); ?>
            </div>
        </div>
    </div>
</div>