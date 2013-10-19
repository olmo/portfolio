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
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <li class="dropdown active">
                        <a class="dropdown-toggle" href="index.html">
                            Home
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#">Sliders</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Revolution Slider</a></li>
                                    <li><a href="index-slider-2.html">Nivo Slider</a></li>
                                </ul>
                            </li>
                            <li><a href="index.html">Home Version 1</a></li>
                            <li><a href="index-2.html">Home Version 2</a></li>
                            <li><a href="index-one-page.html">One Page Website</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about-us.html">About Us</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Features
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#">Headers</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Header Version 1</a></li>
                                    <li><a href="index-header-2.html">Header Version 2</a></li>
                                    <li><a href="index-header-3.html">Header Version 3</a></li>
                                    <li><a href="index-header-4.html">Header Version 4</a></li>
                                    <li><a href="index-header-5.html">Header Version 5</a></li>
                                    <li><a href="index-header-6.html">Header Version 6</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Footers</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html#footer">Footer Version 1</a></li>
                                    <li><a href="index-footer-2.html#footer">Footer Version 2</a></li>
                                    <li><a href="index-footer-3.html#footer">Footer Version 3</a></li>
                                    <li><a href="index-footer-4.html#footer">Footer Version 4</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                    <li><a href="blog-large-image.html">Blog Large Image</a></li>
                                    <li><a href="blog-medium-image.html">Blog Medium Image</a></li>
                                    <li><a href="blog-post.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li><a href="feature-grid-system.html">Grid System</a></li>
                            <li><a href="feature-pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="feature-icons.html">Icons</a></li>
                            <li><a href="feature-elements.html">Elements</a></li>
                            <li><a href="feature-animations.html">Animations</a></li>
                            <li><a href="feature-typograpy.html">Typograpy</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Portfolio
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio-2-columns.html">2 Columns</a></li>
                            <li><a href="portfolio-3-columns.html">3 Columns</a></li>
                            <li><a href="portfolio-4-columns.html">4 Columns</a></li>
                            <li><a href="portfolio-single-project.html">Single Project</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Pages
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="page-full-width.html">Full width</a></li>
                            <li><a href="page-left-sidebar.html">Left sidebar</a></li>
                            <li><a href="page-right-sidebar.html">Right sidebar</a></li>
                            <li><a href="page-custom-header.html">Custom Header</a></li>
                            <li><a href="page-404.html">404 Error</a></li>
                            <li><a href="page-team.html">Team</a></li>
                            <li><a href="page-services.html">Services</a></li>
                            <li><a href="page-careers.html">Careers</a></li>
                            <li><a href="page-faq.html">FAQ</a></li>
                            <li><a href="sitemap.html">Sitemap</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="contact-us.html">
                            Contact Us
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">

                            <li><a href="contact-us.html">Version 1</a></li>
                            <li><a href="contact-us-2.html">Version 2</a></li>
                        </ul>
                    </li>
                </ul>
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
                    <span>Get in Touch</span>
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
                        <p>© Copyright 2013 by Crivos. All Rights Reserved.</p>
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


