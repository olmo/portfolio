<?php
/* @var $this BlogController */
/* @var $data Entrada */
?>
<article>
    <h2><a href="<?php echo $this->createUrl('blog/view',array('id'=>$data->id)); ?>"><?php echo CHtml::encode($data->titulo); ?></a></h2>

    <div class="meta">
        <span class="date"><?php echo CHtml::encode($data->fecha_publicacion); ?></span>
        <span>por <a href="#"><?php echo CHtml::encode($data->autor); ?></a></span>
        <span>in <a href="#">Photography</a></span>
    </div>

    <?php echo $data->texto; ?>

    <a href="blogpost.html" class="read_more">Leer más »</a>
</article>


