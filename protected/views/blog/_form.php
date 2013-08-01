<?php
/* @var $this BlogController */
/* @var $model Entrada */
/* @var $form CActiveForm */
    //$cs = Yii::app()->getClientScript();
    //$cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/dropzone.js', CClientScript::POS_HEAD);
    //$cs->registerCssFile(Yii::app()->request->baseUrl . '/css/dropzone.css', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerCoreScript('jquery');
    Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');
?>

<?php
/*$JQuery_User='
Dropzone.options.myAwesomeDropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you dont.");
    }
    else { done(); }
  }
};
var myDropzone = new Dropzone("div#dropzone", { url: "/file/post"});
';

Yii::app()->getClientScript()->registerSCript('JQuery_User',$JQuery_User,CClientScript::POS_END);*/



?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entrada-form',
	'enableAjaxValidation'=>false
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php //echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
        <?php $this->widget('ImperaviRedactorWidget', array(
            // You can either use it for model attribute
            'model' => $model,
            'attribute' => 'texto',

            'options' => array(
                'lang' => 'es',
                'minHeight' => 200,
                'autoresize' => true,
                'imageUpload' => 'http://localhost:8000'.$this->createUrl('blog/imgUpload'),
                'imageUploadErrorCallback'=>new CJavaScriptExpression('function(obj, json){ alert(json.error); }'),
            ),
        ));
        ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

<?php /*$form=$this->beginWidget('CActiveForm', array(
    'id'=>'entrada-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'dropzone')
)); */?>

<?php //$this->endWidget(); ?>

</div><!-- form -->