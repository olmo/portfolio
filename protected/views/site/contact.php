<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
$cs=Yii::app()->clientScript;
$cs->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/vendor/jquery.gmap.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/map.js', CClientScript::POS_END);

$this->breadcrumbs=array(
	'Contact',
);
?>


        <div id="googlemaps" class="google-map hidden-phone"></div>

        <div class="container">

            <div class="row">
                <div class="span6">

                    <div class="alert alert-success hidden" id="contactSuccess">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="alert alert-error hidden" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                    </div>

                    <h2 class="short"><strong>Envie</strong> un Email</h2>

                    <p class="note">Campos con <span style="color: red;">*</span> son obligatorios.</p>



                    <!-- Contact form -->
                    <?php if(Yii::app()->user->hasFlash('contact')): ?>

                        <div class="flash-success">
                            <?php echo Yii::app()->user->getFlash('contact'); ?>
                        </div>

                    <?php else: ?>

                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'contact-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                'validateOnSubmit'=>true,
                            ),
                        )); ?>

                            <div class="form">

                                <?php echo $form->errorSummary($model); ?>

                                <div class="row controls">
                                    <div class="span3 control-group">
                                        <?php echo $form->labelEx($model,'name'); ?>
                                        <?php echo $form->textField($model,'name'); ?>
                                        <?php echo $form->error($model,'name'); ?>
                                    </div>

                                    <div class="span3 control-group">
                                        <?php echo $form->labelEx($model,'email'); ?>
                                        <?php echo $form->textField($model,'email'); ?>
                                        <?php echo $form->error($model,'email'); ?>
                                    </div>
                                </div>

                                <div class="row controls">
                                    <div class="span6 control-group">
                                        <?php echo $form->labelEx($model,'subject'); ?>
                                        <?php echo $form->textField($model,'subject',array('size'=>100,'maxlength'=>128)); ?>
                                        <?php echo $form->error($model,'subject'); ?>
                                    </div>
                                </div>

                                <div class="row controls">
                                    <div class="span6 control-group">
                                        <?php echo $form->labelEx($model,'body'); ?>
                                        <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
                                        <?php echo $form->error($model,'body'); ?>
                                    </div>
                                </div>

                                <div class="row controls">
                                    <div class="span6 control-group">
                                        <?php if(CCaptcha::checkRequirements()): ?>
                                            <div class="row controls">
                                                <?php echo $form->labelEx($model,'verifyCode'); ?>
                                                <div>
                                                    <?php $this->widget('CCaptcha'); ?>
                                                </div>
                                                <?php echo $form->textField($model,'verifyCode'); ?>
                                                <div class="hint">Por favor, introduzca las letras que se muestran en la imagen de arriba.
                                                    <br/>Las letras no distinguen entre mayúsculas y minúsculas.
                                                </div>
                                                <?php echo $form->error($model,'verifyCode'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <br/>

                                <div>
                                    <?php echo CHtml::submitButton('Enviar', array('class' => 'btn btn-primary btn-large')); ?>
                                    <!-- <p class="status"></p> -->
                                </div>

                            </div>

                        <?php $this->endWidget(); ?>

                    <?php endif; ?>
                </div>

                <div class="span6">
                    <h4 class="pull-top"><strong>Contacto</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

                    <hr />

                    <h4><strong>Oficina</strong></h4>
                    <ul class="unstyled">
                        <li><i class="icon-map-marker"></i> <strong>Dirección:</strong> Calle Primavera 8, Granada, España</li>
                        <li><i class="icon-phone"></i> <strong>Móvil:</strong> (+34) 607 53 53 35</li>
                        <li><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">info@global-arte.com</a></li>
                    </ul>

                    <hr />

                    <h4><strong> Horario </strong></h4>
                    <ul class="unstyled">
                        <li><i class="icon-time"></i> Lunes a Viernes - 9:00 a 15:00</li>
                    </ul>
                </div>
            </div>
        </div>

