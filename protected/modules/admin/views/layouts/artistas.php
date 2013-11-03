<?php $this->beginContent('/layouts/main'); ?>
    <div class="col-xs-6 col-sm-3 col-md-2 bootstrap-admin-col-left" id="sidebar" role="navigation">
        <?php
            $tipoParam = Yii::app()->getRequest()->getParam('tipo');
            $actionParam = Yii::app()->controller->action->id;

            $this->widget('zii.widgets.CMenu',array(
            'activeCssClass'=>'active',
            'encodeLabel' => false,
            'htmlOptions'=>array('class'=>'nav navbar-collapse collapse bootstrap-admin-navbar-side'),
            'items'=>array(
                array('label'=>'Artistas<i class="glyphicon glyphicon-chevron-right"></i>', 'url'=>array('/admin/artistas/index'), 'active'=>$actionParam=='index' || $actionParam=='createArtista' || $actionParam=='updateArtista' ? true : false),
                array('label'=>'Categorías<i class="glyphicon glyphicon-chevron-right"></i>', 'url'=>array('/admin/artistas/view/tipo/categorias'), 'active'=>$tipoParam=='categorias'? true : false),
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