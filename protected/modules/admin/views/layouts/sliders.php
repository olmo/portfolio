<?php $this->beginContent('/layouts/main'); ?>
    <div class="col-xs-6 col-sm-3 col-md-2 bootstrap-admin-col-left" id="sidebar" role="navigation">
        <?php $this->widget('zii.widgets.CMenu',array(
            'activeCssClass'=>'active',
            'encodeLabel' => false,
            'htmlOptions'=>array('class'=>'nav navbar-collapse collapse bootstrap-admin-navbar-side'),
            'items'=>array(
                array('label'=>'Sliders<i class="glyphicon glyphicon-chevron-right"></i>', 'url'=>array('/admin/slider/index'), 'active'=>true),
            ),
        )); ?>
    </div>

    <div class="col-xs-12 col-sm-9 col-md-10">
        <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Submenú</button>
        </p>
        <?php echo $content; ?>
    </div>

<?php $this->endContent(); ?>