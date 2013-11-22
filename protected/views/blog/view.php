<?php
/* @var $this BlogController */
/* @var $model Entrada */

$cs=Yii::app()->clientScript;
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/theme-blog.css');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/blog.js', CClientScript::POS_END);

$this->breadcrumbs=array(
	'Blog'=>array('index'),
);
?>

<div class="row">
    <div class="span12">
        <div class="blog-posts single-post">
            <article class="post post-large-image blog-single-post">
                <div class="post-date">
                    <span class="day"><?php echo Yii::app()->dateFormatter->format("d",$model->fecha_publicacion); ?></span>
                    <span class="month"><?php echo Yii::app()->dateFormatter->format("MMM",$model->fecha_publicacion); ?></span>
                </div>
                <div class="post-content">

                    <h2><a href="<?php echo $this->createUrl('blog/view',array('id'=>$model->id)); ?>"><?php echo CHtml::encode($model->titulo); ?></a></h2>

                    <div class="post-meta">
                        <span><i class="icon-user"></i> Por <a href="#"><?php echo CHtml::encode($model->idAutor->nombre); ?></a> </span>
<!--                        <span><i class="icon-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>-->
                        <span><i class="icon-comments"></i> <a href="#comentarios"><?php echo count($model->comentarios); ?> Comentarios</a></span>
                    </div>

                    <?php echo $model->texto; ?>

                    <div class="post-block post-comments clearfix">
                        <h3 id="comentarios"><i class="icon-comments"></i>Comentarios (<?php echo count($model->comentarios); ?>)</h3>

                        <ul class="comments">
                            <?php foreach($model->comentarios as $comentario): ?>
                                <?php if($comentario->id_padre==0): ?>
                                <li>
                                    <div class="comment">
                                        <div class="comment-block">
                                            <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                    <strong><?php echo CHtml::encode($comentario->nombre); ?></strong>
                                                    <span class="pull-right">
                                                        <span><div style="display: none;"><?php echo $comentario->id ?></div><a href="#comentar" class="responder"><i class="icon icon-reply"></i> Responder</a></span>
                                                        <?php if(Yii::app()->user->getState('isAdmin')): ?>
                                                            <span><?php echo CHtml::link('<i class="icon icon-edit"></i>',array('admin/blog/updateComentario', 'id'=>$comentario->id)); ?></span>
                                                            <span><?php echo CHtml::link('<i class="icon icon-trash"></i>',"#", array("submit"=>array('admin/blog/deleteComentario', 'id'=>$comentario->id),
                                                                    /*'params'=>(array('returnUrl'=>array('blog/view','id'=>$model->id))),*/ 'confirm' => '¿Seguro que quieres borrar el comentario?',)); ?></span>
                                                        <?php endif; ?>
                                                    </span>
                                                </span>
                                            <p><?php echo CHtml::encode($comentario->texto); ?></p>
                                            <span class="date pull-right"><?php echo Yii::app()->dateFormatter->format('dd MMMM yyyy, HH:mm',$comentario->fecha_publicacion); ?></span>
                                        </div>
                                    </div>
                                    <?php if($comentario->respuestas): ?>
                                        <ul class="comments reply">
                                            <?php foreach($comentario->respuestas as $comentario): ?>
                                                <li>
                                                    <div class="comment">
                                                        <div class="comment-block">
                                                            <div class="comment-arrow"></div>
                                                    <span class="comment-by">
                                                        <strong><?php echo CHtml::encode($comentario->nombre); ?></strong>
                                                        <span class="pull-right">
                                                            <span><div style="display: none;"><?php echo $comentario->id_padre ?></div><a href="#comentar" class="responder"><i class="icon icon-reply"></i> Responder</a></span>
                                                            <?php if(Yii::app()->user->getState('isAdmin')): ?>
                                                                <span><?php echo CHtml::link('<i class="icon icon-edit"></i>',array('admin/blog/updateComentario', 'id'=>$comentario->id)); ?></span>
                                                                <span><?php echo CHtml::link('<i class="icon icon-trash"></i>',"#", array("submit"=>array('admin/blog/deleteComentario', 'id'=>$comentario->id),
                                                                        /*'params'=>(array('returnUrl'=>array('blog/view','id'=>$model->id))),*/ 'confirm' => '¿Seguro que quieres borrar el comentario?',)); ?></span>
                                                            <?php endif; ?>
                                                        </span>
                                                    </span>
                                                            <p><?php echo CHtml::encode($comentario->texto); ?></p>
                                                            <span class="date pull-right"><?php echo Yii::app()->dateFormatter->format('dd MMMM yyyy, HH:mm',$comentario->fecha_publicacion); ?></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>


                    <a id="comentar"></a>
                    <div class="post-block post-leave-comment">
                        <?php if(Yii::app()->user->hasFlash('contact')): ?>

                            <div class="alert alert-success">
                                <?php echo Yii::app()->user->getFlash('contact'); ?>
                            </div>

                        <?php endif; ?>
                        <h3>Comenta el post</h3>
                            <div id="resp" class="alert alert-success">
                                Respondiendo a <span id="pers"></span> <span class="pull-right"><a id="noresp" href="#comentar">No Responder</a></span>
                            </div>
                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'comentario-form',
                        )); ?>
                        <?php if($formComentario->hasErrors()): ?>
                            <div class="alert alert-block alert-error fade in">
                                <h4 class="alert-heading">Errores</h4>
                                <?php echo $form->errorSummary($formComentario); ?>
                            </div>
                        <?php endif; ?>
                        <?php echo $form->hiddenField($formComentario,'id_entrada', array('value'=>$model->id)); ?>
                        <?php echo $form->hiddenField($formComentario,'id_padre', array('value'=>'0')); ?>

                            <div class="row controls">
                                <div class="span4 control-group">
                                    <label>Tu nombre (requerido)</label>
                                    <?php echo $form->textField($formComentario,'nombre', array('class'=>'span4')); ?>
                                </div>
                                <div class="span4 control-group">
                                    <label>Tu email (requerido)</label>
                                    <?php echo $form->textField($formComentario,'email', array('class'=>'span4')); ?>
                                </div>
                            </div>
                            <div class="row controls">
                                <div class="span8 control-group">
                                    <label>Comentario (requirido)</label>
                                    <?php echo $form->textArea($formComentario,'texto',array('rows'=>10, 'cols'=>50, 'class'=>'span8')); ?>
                                </div>
                            </div>
                            <div class="btn-toolbar">
                                <input type="submit" value="Publicar Comentario" class="btn btn-primary btn-large">
                            </div>
                        <?php $this->endWidget(); ?>

                    </div>

                </div>
            </article>
        </div>
    </div>
</div>
