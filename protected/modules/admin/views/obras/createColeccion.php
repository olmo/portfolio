<?php

/*$this->breadcrumbs=array(
    'Artistas'=>array('index'),
    $tipoP=>array('index'),
    'Añadir',
);*/

Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');

?>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="text-muted bootstrap-admin-box-title"><?php echo ($accion=='create' ? 'Añadir '.$tipoS : 'Actualizar '.$tipoS); ?></div>
        </div>
        <div class="bootstrap-admin-panel-content">
            <div class="form-horizontal" role="form">

                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'form',
                    'errorMessageCssClass'=>'has-error',
                    'enableAjaxValidation'=>false,
                    'htmlOptions' => array('enctype' => 'multipart/form-data'),
                )); ?>
                <fieldset>

                    <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

                    <?php if($model->hasErrors()): ?>
                        <div class="panel panel-danger">
                            <div class="panel-heading">Errores</div>
                            <div class="panel-body">
                                <?php echo $form->errorSummary(array_merge(array($model),$validatedObras)); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group<?php echo $model->getError('nombre')  ? ' has-error' : ''; ?>">
                        <?php echo $form->labelEx($model,'nombre', array('class'=>'col-lg-2 control-label')); ?>
                        <div class="col-lg-10">
                            <?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo $model->getError('descripcion')  ? ' has-error' : ''; ?>">
                        <?php echo $form->labelEx($model,'descripcion', array('class'=>'col-lg-2 control-label')); ?>
                        <div class="col-lg-10">
                            <?php $this->widget('ImperaviRedactorWidget', array(
                                // You can either use it for model attribute
                                'model' => $model,
                                'attribute' => 'descripcion',

                                'options' => array(
                                    'lang' => 'es',
                                    'minHeight' => 200,
                                    'autoresize' => true,
                                    'imageUpload' => 'http://localhost:8000'.$this->createUrl('blog/imgUpload'),
                                    'imageUploadErrorCallback'=>new CJavaScriptExpression('function(obj, json){ alert(json.error); }'),
                                ),
                            ));
                            ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo $model->getError('imagen')  ? ' has-error' : ''; ?>">
                        <?php echo $form->labelEx($model,'imagen', array('class'=>'col-lg-2 control-label')); ?>
                        <div class="col-lg-10">
                            <?php echo $form->fileField($model, 'imagen'); ?>
                        </div>
                        <?php if($model->isNewRecord!='1'): ?>
                            <div class="col-lg-10">
                                <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/colecciones/'.$model->imagen,"imagen",array("width"=>200)); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="table-responsive" style="margin-left: 20px;">
                        <?php
                        $tams = Obra::model()->findAll();
                        $arr = array();
                        $arr[''] = '-';
                        foreach($tams as $t)
                        {
                            $arr[$t->id] = $t->titulo;
                        }

                        $memberFormConfig = array(
                            'elements'=>array(

                                'id_obra'=>array(
                                    'type'=>'dropdownlist',
                                    //it is important to add an empty item because of new records
                                    'items'=>$arr,
                                ),
                            ));

                        $this->widget('ext.multimodelform.MultiModelForm',array(
                            'id' => 'idcoleccion', //the unique widget id
                            'formConfig' => $memberFormConfig, //the form configuration array
                            'model' => $obras, //instance of the form model
                            'tableView' => true,
                            'addItemText'=>'Añadir Obra',
                            'removeText'=>'Eliminar',
                            'tableHtmlOptions'=>array('class'=>'table'),
                            'addItemAsButton'=>true,

                            //if submitted not empty from the controller,
                            //the form will be rendered with validation errors
                            'validatedItems' => $validatedObras,

                            //array of member instances loaded from db
                            'data' => $obras->findAll('id_coleccion=:id_coleccion', array(':id_coleccion'=>$model->id)),
                        ));
                        ?>
                    </div>

                    <?php echo CHtml::htmlButton($model->isNewRecord ? 'Añadir' : 'Guardar',array('type' => 'submit', 'class'=>'btn btn-primary pull-right')); ?>
                </fieldset>

                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>