<?php
/* @var $this GaleriaController */
/* @var $data Elemento */
?>

<ul class="portfolio">
    <li>
        <a href="portfolio-item.html">
            <img src="placeholders/360x225/1.jpg" alt="">
            <div class="overlay">
                <h3>Lorem ipsum dolor sit amet</h3>
                <p>Morbi eu nibh nibh, ut cursus leo</p>
            </div>
        </a>
    </li>
</ul>



<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->id_categoria); ?>
	<br />


</div>