<li class="span3">
    <div class="team-item thumbnail">
        <a href="<?php echo $this->createUrl('galeria/colecciones', array('id'=>$data->id)); ?>" class="thumb-info">
            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/colecciones/<?php echo $data->imagen; ?>">
                <span class="thumb-info-title">
                    <span class="thumb-info-inner"><?php echo CHtml::encode($data->nombre); ?></span>
                </span>
        </a>
    </div>
</li>