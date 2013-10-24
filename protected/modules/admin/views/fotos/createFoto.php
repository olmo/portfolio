<?php
/* @var $this GaleriaController */
/* @var $model Foto */
/* @var $form CActiveForm */
Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');
?>



<h3>Añadir Foto</h3>

<div class="form-horizontal" role="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'elemento-form',
        'enableAjaxValidation'=>false,
        'errorMessageCssClass'=>'has-error',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )); ?>

    <fieldset>

    <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

        <?php echo count($validatedTamanos); ?>

    <?php if($model->hasErrors() or count($validatedTamanos)>0): ?>
    <div class="panel panel-danger">
        <div class="panel-heading">Errores</div>
        <div class="panel-body">
            <?php echo $form->errorSummary(array_merge(array($model),$validatedTamanos)); ?>
        </div>
     </div>
    <?php endif; ?>

    <div class="form-group<?php echo $model->getError('titulo')  ? ' has-error' : ''; ?>">
        <?php echo $form->labelEx($model,'titulo', array('class'=>'col-lg-2 control-label')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
        </div>
    </div>

    <div class="form-group<?php echo $model->getError('id_artista')  ? ' has-error' : ''; ?>">
        <?php echo $form->labelEx($model,'id_artista', array('class'=>'col-lg-2 control-label')); ?>
        <div class="col-lg-10">
            <?php echo $form->dropDownList($model,'id_artista', CHtml::listData(Artistas::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona un artista','class'=>'form-control')); ?>
        </div>
    </div>

    <div class="form-group<?php echo $model->getError('id_formato')  ? ' has-error' : ''; ?>">
        <?php echo $form->labelEx($model,'id_formato', array('class'=>'col-lg-2 control-label')); ?>
        <div class="col-lg-10">
            <?php echo $form->dropDownList($model,'id_formato', CHtml::listData(FotosFormato::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona un formato','class'=>'form-control')); ?>
        </div>
    </div>

    <div class="form-group<?php echo $model->getError('id_tecnica')  ? ' has-error' : ''; ?>">
        <?php echo $form->labelEx($model,'id_tecnica', array('class'=>'col-lg-2 control-label')); ?>
        <div class="col-lg-10">
            <?php echo $form->dropDownList($model,'id_tecnica', CHtml::listData(FotosTecnica::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona una técnica','class'=>'form-control')); ?>
        </div>
    </div>

    <div class="form-group<?php echo $model->getError('id_tema')  ? ' has-error' : ''; ?>">
        <?php echo $form->labelEx($model,'id_tema', array('class'=>'col-lg-2 control-label')); ?>
        <div class="col-lg-10">
            <?php echo $form->dropDownList($model,'id_tema', CHtml::listData(FotosTema::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona un tema','class'=>'form-control')); ?>
        </div>
    </div>

    <div class="form-group<?php echo $model->getError('montaje_recomendado')  ? ' has-error' : ''; ?>">
        <?php echo $form->labelEx($model,'montaje_recomendado', array('class'=>'col-lg-2 control-label')); ?>
        <div class="col-lg-10">
            <?php echo $form->dropDownList($model,'montaje_recomendado', CHtml::listData(FotosMontaje::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona un montaje','class'=>'form-control')); ?>
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
                <div class="row">
                    <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/fotos/'.$model->imagen,"imagen",array("width"=>200)); ?>
                </div>
            <?php endif; ?>
        </div>


        <?php
            $tams = FotosTamano::model()->findAll();
            $arr = array();
            $arr[''] = '-';
            foreach($tams as $t)
            {
                $arr[$t->id] = $t->nombre;
            }

            $memberFormConfig = array(
                'elements'=>array(
                    'id_foto'=>array(
                        'type'=>'hidden'
                    ),
                    'id_tamano'=>array(
                        'type'=>'dropdownlist',
                        //it is important to add an empty item because of new records
                        'items'=>$arr,
                    ),
                    'ancho'=>array(
                        'type'=>'text',
                        'maxlength'=>6,
                        'size'=>6,
                    ),
                    'alto'=>array(
                        'type'=>'text',
                        'maxlength'=>6,
                        'size'=>6,
                    ),
                    'precio'=>array(
                        'type'=>'text',
                        'maxlength'=>6,
                        'size'=>6,
                    ),
                    'stock_inicial'=>array(
                        'type'=>'text',
                        'maxlength'=>3,
                        'size'=>3,
                    ),
                    'stock_restante'=>array(
                        'type'=>'text',
                        'maxlength'=>3,
                        'size'=>3,
                    ),
                ));

            $this->widget('ext.multimodelform.MultiModelForm',array(
                'id' => 'idfoto', //the unique widget id
                'formConfig' => $memberFormConfig, //the form configuration array
                'model' => $tamanos, //instance of the form model
                'tableView' => true,

                //if submitted not empty from the controller,
                //the form will be rendered with validation errors
                'validatedItems' => $validatedTamanos,

                //array of member instances loaded from db
                'data' => $tamanos->findAll('id_foto=:id_foto', array(':id_foto'=>$model->id)),
            ));
        ?>

        <?php echo CHtml::htmlButton($model->isNewRecord ? 'Añadir' : 'Guardar',array('type' => 'submit', 'class'=>'btn btn-primary pull-right')); ?>

    </fieldset>

    <?php $this->endWidget(); ?>


</div><!-- form -->