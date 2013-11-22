<?php
/* @var $this BlogController */
/* @var $data Entrada */
?>
<article class="post post-large-image">
    <div class="post-date">
        <span class="day"><?php echo Yii::app()->dateFormatter->format("d",$data->fecha_publicacion); ?></span>
        <span class="month"><?php echo Yii::app()->dateFormatter->format("MMM",$data->fecha_publicacion); ?></span>
    </div>
    <div class="post-content">

        <h2><a href="<?php echo $this->createUrl('blog/view',array('id'=>$data->id)); ?>"><?php echo CHtml::encode($data->titulo); ?></a></h2>
        <?php echo $data->texto; ?>

        <div class="post-meta">
            <span><i class="icon-user"></i> Por <a href="#"><?php echo CHtml::encode($data->idAutor->nombre); ?></a> </span>
<!--            <span><i class="icon-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>-->
            <span><i class="icon-comments"></i> <a href="<?php echo $this->createUrl('blog/view',array('id'=>$data->id,'#'=>'comentarios')); ?>"><?php echo count($data->comentarios); ?> Comentarios</a></span>
            <a href="<?php echo $this->createUrl('blog/view',array('id'=>$data->id)); ?>" class="btn btn-mini btn-primary pull-right">Leer más...</a>
        </div>

    </div>
</article>

