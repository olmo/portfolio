<?php
/* @var $this GaleriaController */
/* @var $data Elemento */
?>


<li>
    <a href="<?php echo $this->createUrl('galeria/view',array('id'=>$data->id)); ?>">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/galeria/<?php echo $data->id; ?>/<?php echo $data->elementosImagenes[0]->nombre; ?>" alt="">
        <div class="overlay">
            <h3><?php echo CHtml::encode($data->nombre); ?></h3>
            <p><?php echo CHtml::encode($data->titulo); ?></p>
        </div>
    </a>
</li>
