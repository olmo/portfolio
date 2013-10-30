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

        <span class="thumb-info-caption">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
            <span class="thumb-info-social-icons">
                <a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="icon-facebook"></i><span>Facebook</span></a>
                <a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="icon-twitter"></i><span>Twitter</span></a>
                <a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="icon-linkedin"></i><span>Linkedin</span></a>
            </span>
        </span>
    </div>
</li>


