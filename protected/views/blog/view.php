<?php
/* @var $this BlogController */
/* @var $model Entrada */

$this->breadcrumbs=array(
	'Entradas'=>array('index'),
	$model->id,
);
?>

<div class="row">
    <div class="span12">
        <div class="blog-posts single-post">
            <article class="post post-large-image blog-single-post">
                <div class="post-date">
                    <span class="day">10</span>
                    <span class="month">Jan</span>
                </div>
                <div class="post-content">

                    <h2><a href="<?php echo $this->createUrl('blog/view',array('id'=>$model->id)); ?>"><?php echo CHtml::encode($model->titulo); ?></a></h2>

                    <div class="post-meta">
                        <span><i class="icon-user"></i> By <a href="#">John Doe</a> </span>
                        <span><i class="icon-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                        <span><i class="icon-comments"></i> <a href="#">12 Comments</a></span>
                    </div>

                    <?php echo $model->texto; ?>

                    <div class="post-block post-author clearfix">
                        <h3><i class="icon-user"></i>Author</h3>
                        <div class="thumbnail">
                            <a href="">
                                <img src="img/avatar.jpg" alt="">
                            </a>
                        </div>
                        <p><strong class="name"><a href="#">John Doe</a></strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
