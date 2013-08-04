<?php
/* @var $this BlogController */
/* @var $model Entrada */

$this->breadcrumbs=array(
	'Entradas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Entrada', 'url'=>array('index')),
	array('label'=>'Create Entrada', 'url'=>array('create')),
	array('label'=>'Update Entrada', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Entrada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entrada', 'url'=>array('admin')),
);
?>

<section class="layout left blogpost"><div class="skew"></div>

    <!-- Article -->
    <ul class="articles blogpost">
        <li>
            <article>
                <h2><a href="<?php echo $this->createUrl('blog/view',array('id'=>$model->id)); ?>"><?php echo CHtml::encode($model->titulo); ?></a></h2>

                <div class="meta">
                    <span class="date"><?php echo CHtml::encode($model->fecha_publicacion); ?></span>
                    <span>por <a href="#"><?php echo CHtml::encode($model->autor); ?></a></span>
                    <span>in <a href="#">Photography</a></span>
                </div>

                <?php echo $model->texto; ?>
            </article>
        </li>
    </ul>
</section>