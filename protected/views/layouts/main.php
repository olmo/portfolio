<?php /* @var $this Controller */ ?>

<?php

    /*Yii::app()->clientScript->registerCoreScript('jquery');
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/libs/jquery-1.7.2.min.js', CClientScript::POS_END);*/
	
?>


<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="Crivos.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/flexslider/flexslider.css" media="screen" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/magnific-popup/magnific-popup.css" media="screen" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme-elements.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme-animate.css">

    <!-- Current Page Styles -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/revolution-slider/css/settings.css" media="screen" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/revolution-slider/css/captions.css" media="screen" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/circle-flip-slideshow/css/component.css" media="screen" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/skins/blue.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme-responsive.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/img/apple-touch-icon-144x144.png">

    <!-- Head Libs -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/modernizr.js"></script>

    <!--[if IE]>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css">
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/respond.js"></script>
    <![endif]-->

    <!-- Facebook OpenGraph Tags - Go to http://developers.facebook.com/ for more information.
    <meta property="og:title" content="Porto Website Template."/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.crivos.com/themes/porto"/>
    <meta property="og:image" content="http://www.crivos.com/themes/porto/"/>
    <meta property="og:site_name" content="Porto"/>
    <meta property="fb:app_id" content=""/>
    <meta property="og:description" content="Porto - Responsive HTML5 Template"/>
    -->

</head>

<body>
<div class="body">
    <header>
        <div class="container">
            <h1 class="logo">
                <a href="index.html">
                    <img alt="Porto" src="img/logo.png">
                </a>
            </h1>
            <div class="search">
                <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
                    <div class="control-group">
                        <input type="text" class="input-medium search-query" name="q" id="q" placeholder="Search...">
                        <button class="search" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
            </div>
            <nav>
                <ul class="nav nav-pills nav-top">
                    <li>
                        <a href="about-us.html"><i class="icon-angle-right"></i>About Us</a>
                    </li>
                    <li>
                        <a href="contact-us.html"><i class="icon-angle-right"></i>Contact Us</a>
                    </li>
                    <li class="phone">
                        <span><i class="icon-phone"></i>(123) 456-7890</span>
                    </li>
                </ul>
            </nav>
            <div class="social-icons">
                <ul class="social-icons">
                    <li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
                    <li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
                    <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
                </ul>
            </div>

            <nav>
                <?php $this->widget('zii.widgets.CMenu',array(
                    'activeCssClass'=>'active',
                    'encodeLabel' => false,
                    'id'=>'mainMenu',
                    'htmlOptions'=>array('class'=>'nav nav-pills nav-main'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
                    'items'=>array(
                        array('label'=>'Inicio', 'url'=>array('/site/index'),),
                        array('label'=>'Vinilos', 'url'=>array('/galeria/index')),
                        array('label'=>'Blog <i class="icon-angle-down"></i>', 'url'=>array('/blog/index'), 'itemOptions'=>array('class'=>'dropdown'), 'linkOptions'=>array('class'=>'dropdown-toggle'), 'items'=>array(
                            array('label'=>'Nueva entrada', 'url'=>array('blog/create'), /*'visible'=>!Yii::app()->user->isGuest*/ ),
                            array('label'=>'Administrar entradas', 'url'=>array('blog/admin'), /*'visible'=>!Yii::app()->user->isGuest*/ ),
                        )),
                        array('label'=>'Contacto', 'url'=>array('/site/contact')),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                )); ?>
            </nav>
        </div>
    </header>

    <div role="main" class="main">
        <div id="content" class="content full">
            <div class="container">
                <?php echo $content; ?>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-ribon">
                    <span>Mantén el contacto</span>
                </div>
                <div class="span3">
                    <h4>Newsletter</h4>
                    <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

                    <div class="alert alert-success hidden" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>

                    <div class="alert alert-error hidden" id="newsletterError"></div>

                    <form class="form-inline" id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                        <div class="control-group">
                            <div class="input-append">
                                <input class="span2" placeholder="Email Address" name="email" id="email" type="text">
                                <button class="btn" type="submit">Go!</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="span3">
                    <h4>Latest Tweet</h4>
                    <div id="tweet" class="twitter" data-account-id="crivosthemes">
                        <p>Please wait...</p>
                    </div>
                </div>
                <div class="span4">
                    <div class="contact-details">
                        <h4>Contact Us</h4>
                        <ul class="contact">
                            <li><p><i class="icon-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
                            <li><p><i class="icon-phone"></i> <strong>Phone:</strong> (123) 456-7890</p></li>
                            <li><p><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="span2">
                    <h4>Follow Us</h4>
                    <div class="social-icons">
                        <ul class="social-icons">
                            <li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
                            <li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
                            <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="span1">
                        <a href="index.html" class="logo">
                            <img alt="Porto Website Template" src="img/logo-footer.png">
                        </a>
                    </div>
                    <div class="span7">
                        <p>© Copyright 2013. All Rights Reserved.</p>
                    </div>
                    <div class="span4">
                        <nav id="sub-menu">
                            <ul>
                                <li><a href="page-faq.html">FAQ's</a></li>
                                <li><a href="sitemap.html">Sitemap</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Libs -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="vendor/jquery.js"><\/script>')</script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery.easing.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery.appear.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery.cookie.js"></script>
<!-- <script src="master/style-switcher/style.switcher.js"></script> Style Switcher -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/selectnav.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/twitterjs/twitter.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/revolution-slider/js/jquery.themepunch.plugins.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/revolution-slider/js/jquery.themepunch.revolution.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/flexslider/jquery.flexslider.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery.validate.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>

<!-- Current Page Scripts -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/views/view.home.js"></script>

<!-- Theme Initializer -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/theme.js"></script>

<!-- Custom JS -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>

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

</body>


</html>


