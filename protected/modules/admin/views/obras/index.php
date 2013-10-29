<?php

/*$this->breadcrumbs=array(
    'Obras'=>array('index'),
);*/

?>

<?php echo CHtml::link('Añadir Obra',array('/admin/obras/createObra'), array('class'=>'btn btn-primary')); ?>

<p></p>

<table class="table table-striped">
    <thead>
    <tr><td>Título</td><td>Artista</td><td>Acciones</td></tr>
    </thead>
    <tbody>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_viewObras',
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
