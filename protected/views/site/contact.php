<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="body">

    <div role="main" class="main">

        <section class="page-top">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/site/index.php">Inicio</a> <span class="divider">/</span></li>
                            <li class="active">Contacto</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <h2>Contacto</h2>
                    </div>
                </div>
            </div>
        </section>

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

                            <div class="one_half first">
                                <?php echo $form->labelEx($model,'name'); ?>
                                <?php echo $form->textField($model,'name'); ?>
                                <?php echo $form->error($model,'name'); ?>
                            </div>

                            <div class="one_half last">
                                <?php echo $form->labelEx($model,'email'); ?>
                                <?php echo $form->textField($model,'email'); ?>
                                <?php echo $form->error($model,'email'); ?>
                            </div>

                            <div class="row">
                                <?php echo $form->labelEx($model,'subject'); ?>
                                <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
                                <?php echo $form->error($model,'subject'); ?>
                            </div>

                            <div class="row">
                                <?php echo $form->labelEx($model,'body'); ?>
                                <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
                                <?php echo $form->error($model,'body'); ?>
                            </div>

                            <?php if(CCaptcha::checkRequirements()): ?>
                                <div class="row">
                                    <?php echo $form->labelEx($model,'verifyCode'); ?>
                                    <div>
                                        <?php $this->widget('CCaptcha'); ?>
                                        <?php echo $form->textField($model,'verifyCode'); ?>
                                    </div>
                                    <div class="hint">Por favor, introduzca las letras que se muestran en la imagen de arriba.
                                        <br/>Las letras no distinguen entre mayúsculas y minúsculas.</div>
                                    <?php echo $form->error($model,'verifyCode'); ?>
                                </div>
                            <?php endif; ?>

                            <div>
                                <?php echo CHtml::submitButton('Enviar', array('class' => 'button')); ?>
                                <!-- <p class="status"></p> -->
                            </div>

                        </div>

                        <?php $this->endWidget(); ?>

                    <?php endif; ?>









                    <form action="" id="contactForm" type="post">
                        <div class="row controls">
                            <div class="span3 control-group">
                                <label>Your name *</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="span3" name="name" id="name">
                            </div>
                            <div class="span3 control-group">
                                <label>Your email address *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="span3" name="email" id="email">
                            </div>
                        </div>
                        <div class="row controls">
                            <div class="span6 control-group">
                                <label>Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="span6" name="subject" id="subject">
                            </div>
                        </div>
                        <div class="row controls">
                            <div class="span6 control-group">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="span6" name="message" id="message"></textarea>
                            </div>
                        </div>
                        <div class="btn-toolbar">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-large" data-loading-text="Loading...">
                        </div>
                    </form>
                </div>
                <div class="span6">

                    <h4 class="pull-top">Mantenga el <strong>contacto</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

                    <hr />

                    <h4>La <strong>Oficina</strong></h4>
                    <ul class="unstyled">
                        <li><i class="icon-map-marker"></i> <strong>Dirección:</strong> Calle Primavera 8, Granada, España</li>
                        <li><i class="icon-phone"></i> <strong>Móvil:</strong> (+34) 607 53 53 35</li>
                        <li><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">info@decorvinilo.com</a></li>
                    </ul>

                    <hr />

                    <h4><strong> Horario </strong> de servico</h4>
                    <ul class="unstyled">
                        <li><i class="icon-time"></i> Monday a Friday - 9:00 a 15:00pm</li>
                        <li><i class="icon-time"></i> Sábados &nbsp; - 9:00 a 14:00</li>
                        <li><i class="icon-time"></i> Domingos - Cerrado</li>
                    </ul>

                </div>
            </div>
        </div>

    </div>

</div>


    <!-- Contact information -->
    <p class="column">
        <strong>Oficina:</strong><br>
        Calle Primavera 8<br>
        Granada, España
    </p>
    <p class="column">
        <strong>Contacto:</strong><br>
        info@decorvinilo.com<br>
        607 53 53 35
    </p>

    <div class="clearfix"></div>
    <br>

    <h3>Mandenos un e-mail</h3>

    <p class="note">Campos con <span style="color: red;">*</span> son obligatorios.</p>



<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>