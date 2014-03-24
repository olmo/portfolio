<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="text-muted bootstrap-admin-box-title">Sliders</div>
        </div>
        <div class="bootstrap-admin-panel-content">
            <?php echo CHtml::link('Añadir Slider',array('/admin/slider/create'), array('class'=>'btn btn-primary')); ?>
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
        </div>
    </div>
</div>