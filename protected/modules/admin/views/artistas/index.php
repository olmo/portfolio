<?php

/*$this->breadcrumbs=array(
    'Artistas'=>array('index'),
);*/

?>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="text-muted bootstrap-admin-box-title">Artistas</div>
        </div>
        <div class="bootstrap-admin-panel-content">

            <?php echo CHtml::link('Añadir Artista',array('/admin/artistas/createArtista'), array('class'=>'btn btn-primary')); ?>

            <p></p>

            <table class="table table-striped">
                <thead>
                <tr><th>Nombre</th><th>Acciones</th></tr>
                </thead>
                <tbody>
                <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_viewArtistas',
                    'template'=>"{items}",
                )); ?>
                </tbody>
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