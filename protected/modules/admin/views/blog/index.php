<?php echo CHtml::link('Añadir Entrada',array('/admin/blog/create'), array('class'=>'btn btn-primary')); ?>
<p></p>

<table class="table table-striped">
    <tbody>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        'template'=>"{items}",
    )); ?>
    </tbody>
</table>