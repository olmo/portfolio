<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
$this->breadcrumbs=array(
	'Contact',
);
?>

<body style="zoom: 1;">
<div class="body">

    <div role="main" class="main">

        <section class="page-top">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="breadcrumb">
                            <li> <?php echo CHtml::link('Inicio', Yii::app()->homeUrl) ?> <span class="divider">/</span></li>
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

    </div>

    <!-- Libs -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="vendor/jquery.js"><\/script>')</script>
    <script src="vendor/jquery.easing.js"></script>
    <script src="vendor/jquery.appear.js"></script>
    <script src="vendor/jquery.cookie.js"></script>
    <!-- <script src="master/style-switcher/style.switcher.js"></script> Style Switcher -->
    <script src="vendor/bootstrap.js"></script>
    <script src="vendor/selectnav.js"></script>
    <script src="vendor/twitterjs/twitter.js"></script>
    <script src="vendor/flexslider/jquery.flexslider.js"></script>
    <script src="vendor/jflickrfeed/jflickrfeed.js"></script>
    <script src="vendor/magnific-popup/magnific-popup.js"></script>
    <script src="vendor/jquery.validate.js"></script>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="vendor/jquery.gmap.js"></script>

    <script>

        /*
         Map Settings

         Find the Latitude and Longitude of your address:
         - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
         - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

         */

        // Map Markers
        var mapMarkers = [{
            address: "217 Summit Boulevard, Birmingham, AL 35243",
            html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            }
        },{
            address: "645 E. Shaw Avenue, Fresno, CA 93710",
            html: "<strong>California Office</strong><br>645 E. Shaw Avenue, Fresno, CA 93710<br><br><a href='#' onclick='mapCenterAt({latitude: 36.80948, longitude: -119.77598, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            }
        },{
            address: "New York, NY 10017",
            html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            }
        }];

        // Map Initial Location
        var initLatitude = 37.09024;
        var initLongitude = -95.71289;

        // Map Extended Settings
        var mapSettings = {
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 5
        };

        var map = $("#googlemaps").gMap(mapSettings);

        // Map Center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $("#googlemaps").gMap("centerAt", options);
        }

    </script>

    <script src="js/plugins.js"></script>

    <!-- Page Scripts -->
    <script src="js/views/view.contact.js"></script>

    <!-- Theme Initializer -->
    <script src="js/theme.js"></script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
    <!--
    <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXX-X']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    -->

</div>
</body>
