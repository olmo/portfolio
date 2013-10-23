<?php
/* @var $this GaleriaController */
/* @var $data Foto */
?>

<li class="span3">
    <div class="portfolio-item thumbnail mobile-max-width">
        <a href="<?php echo $this->createUrl('galeria/view', array('id'=>$data->id)); ?>" class="thumb-info">
            <div class="centerthumbs">
            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/fotos/thumbs/<?php echo $data->imagen; ?>">
            </div>
                <span class="thumb-info-title">
                <span class="thumb-info-inner">SEO</span>
                <span class="thumb-info-type">Website</span>
            </span>
            <span class="thumb-info-action">
                <span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-link"></i></span>
            </span>
        </a>
    </div>
</li>