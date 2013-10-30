<?php

/*$this->breadcrumbs=array(
    'Artistas'=>array('index'),
);*/

?>

<?php echo CHtml::link('Añadir Artista',array('/admin/artistas/createArtista'), array('class'=>'btn btn-primary')); ?>

<p></p>

<table class="table table-striped">
    <thead>
    <tr><td>Nombre</td><td>Acciones</td></tr>
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