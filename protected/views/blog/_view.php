<?php
/* @var $this BlogController */
/* @var $data Entrada */
?>
<article class="post post-large-image">
    <div class="post-date">
        <span class="day">10</span>
        <span class="month">Jan</span>
    </div>
    <div class="post-content">

        <h2><a href="<?php echo $this->createUrl('blog/view',array('id'=>$data->id)); ?>"><?php echo CHtml::encode($data->titulo); ?></a></h2>
        <?php echo $data->texto; ?>

        <div class="post-meta">
            <span><i class="icon-user"></i> By <a href="#"><?php echo CHtml::encode($data->autor); ?></a> </span>
            <span><i class="icon-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
            <span><i class="icon-comments"></i> <a href="#">12 Comments</a></span>
            <a href="<?php echo $this->createUrl('blog/view',array('id'=>$data->id)); ?>" class="btn btn-mini btn-primary pull-right">Read more...</a>
        </div>

    </div>
</article>

