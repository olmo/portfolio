<?php
/* @var $this ArtistasController */
/* @var $data Artistas */

?>

<li class="span3 isotope-item <?php echo CHtml::encode($data->idCategoria->nombre); ?>">
    <div class="team-item thumbnail">

        <a href="<?php echo $this->createUrl('artistas/view', array('id'=>$data->id)); ?>" class="thumb-info team">
            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/artistas/<?php echo $data->imagen; ?>">

            <span class="thumb-info-title">
                <span class="thumb-info-inner"><?php echo CHtml::encode($data->nombre); ?></span>
                <span class="thumb-info-type"><?php echo CHtml::encode($data->idCategoria->nombre); ?></span>
            </span>
        </a>
    </div>
</li>
