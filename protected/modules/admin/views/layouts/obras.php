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
                array('label'=>'Obras<i class="glyphicon glyphicon-chevron-right"></i>', 'url'=>array('obras/index'), 'active'=>$actionParam=='index' || $actionParam=='createObra' || $actionParam=='updateObra' || $actionParam=='ordenarObras' ? true : false),
                array('label'=>'Colecciones<i class="glyphicon glyphicon-chevron-right"></i>', 'url'=>array('obras/viewColecciones'), 'active'=>$actionParam=='viewColecciones' || $actionParam=='createColeccion' || $actionParam=='updateColeccion' ? true : false),
                array('label'=>'Formatos<i class="glyphicon glyphicon-chevron-right"></i>', 'url'=>array('obras/view/tipo/formato'), 'active'=>$tipoParam=='formato'? true : false),
                array('label'=>'Tamaños<i class="glyphicon glyphicon-chevron-right"></i>', 'url'=>array('obras/view/tipo/tamano'), 'active'=>$tipoParam=='tamano'? true : false),
                array('label'=>'Técnicas<i class="glyphicon glyphicon-chevron-right"></i>', 'url'=>array('obras/view/tipo/tecnica'), 'active'=>$tipoParam=='tecnica'? true : false),
                array('label'=>'Temas<i class="glyphicon glyphicon-chevron-right"></i>', 'url'=>array('obras/view/tipo/tema'), 'active'=>$tipoParam=='tema'? true : false),
                array('label'=>'Montajes<i class="glyphicon glyphicon-chevron-right"></i>', 'url'=>array('obras/view/tipo/montaje'), 'active'=>$tipoParam=='montaje'? true : false),
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