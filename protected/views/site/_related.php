<?php
/* @var $this GaleriaController */
/* @var $data Foto */
?>

<li class="span3">
    <div class="portfolio-item thumbnail mobile-max-width">
        <a href="<?php echo $this->createUrl('galeria/view', array('id'=>$data->id)); ?>" class="thumb-info">
            <div class="centerthumbs"><span></span>
            <img alt="" style="max-height: 180px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/thumbs/<?php echo $data->imagen; ?>">
            </div>
            <span class="thumb-info-action">
                <span class="thumb-info-title">
                    <span class="thumb-info-inner"><?php echo CHtml::encode($data->titulo); ?></span>
                    <span class="thumb-info-type"><?php echo CHtml::encode($data->idArtista->nombre); ?></span>
                </span>
            </span>
            </span>
        </a>
    </div>
</li>