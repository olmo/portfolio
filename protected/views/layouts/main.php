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
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/isotope/jquery.isotope.css" media="screen" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme-elements.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme-animate.css">

    <!-- Current Page Styles -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/revolution-slider/css/settings.css" media="screen" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/revolution-slider/css/captions.css" media="screen" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/vendor/circle-flip-slideshow/css/component.css" media="screen" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/skins/blue.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme-responsive.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css">

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
    <script>
        var baseurl="<?php print Yii::app()->request->baseUrl;?>";
    </script>

</head>

<body>
<div class="body">
    <header>
        <div class="container">
            <h1 class="logo">
                <a href="index.html">
                    <img alt="Porto" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png">
                </a>
            </h1>
            <div class="search">
                <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
                    <div class="control-group">
                        <input type="text" class="input-medium search-query" name="q" id="q" placeholder="Buscar...">
                        <button class="search" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
            </div>
            <nav>
                <ul class="nav nav-pills nav-top">
                    <li>
                        <a href="about-us.html"><i class="icon-angle-right"></i>Sobre nosotros</a>
                    </li>
                    <li>
                        <a href="contact-us.html"><i class="icon-angle-right"></i>Contacto</a>
                    </li>
                    <li class="phone">
                        <span><i class="icon-phone"></i>(+34) 607 53 53 35</span>
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
                        array('label'=>'Galería', 'url'=>array('/galeria/index')),
                        array('label'=>'Artistas', 'url'=>array('/artistas/index')),
                        array('label'=>'Blog', 'url'=>array('/blog/index')),
                        array('label'=>'Sobre Nosotros', 'url'=>array('/site/about')),
                        array('label'=>'Contacto', 'url'=>array('/site/contact')),
                    ),
                )); ?>
            </nav>
        </div>
    </header>

    <div role="main" class="main">
        <?php echo $content; ?>
    </div>

    <footer id="footer">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="span1">
                        <a href="index.html" class="logo">
                            <img alt="Porto Website Template" src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-footer.png">
                        </a>
                    </div>
                    <div class="span7">
                        <p>© Copyright 2013. All Rights Reserved.</p>
                    </div>
                    <div class="span4">
                        <nav id="sub-menu">
                            <ul>
                                <li><?php echo CHtml::link('Administración' ,array('/admin/')); ?></li>
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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/isotope/jquery.isotope.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jflickrfeed/jflickrfeed.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>

<!-- Current Page Scripts -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/views/view.home.js"></script>

<!-- Theme Initializer -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/theme.js"></script>

<!-- Custom JS -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>

</body>


</html>


