<?php /* @var $this Controller */ ?>

<?php

    Yii::app()->clientScript->registerCoreScript('jquery');
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.fancybox-1.3.4.pack.js', CClientScript::POS_END);
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.masonry.min.js', CClientScript::POS_END);
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/script.js', CClientScript::POS_END);
?>

<!doctype html>
    <!--[if lt IE 7]>      <html class="no-js ie6 oldie" lang="en"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js ie7 oldie" lang="en"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js ie8 oldie" lang="en"> <![endif]-->
    <!--[if gt IE 8]>      <html class="no-js" lang="en">           <![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.fancybox-1.3.4.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

    	<link rel="stylesheet" type="text/css" href="
    <?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<header class="clearfix">
    <h1 class="black">
        <a href="index.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt=""></a>
    </h1>

    <nav>
        <!-- Desktop navigation -->
        <ul>
            <li>
                <a href="index.html" class="selected">Portfolio</a>
                <ul>
                    <li><a href="portfolio-item.html">Portfolio item</a></li>
                    <li><a href="portfolio-video.html">With video</a></li>
                </ul>
            </li>
            <li>
                <a href="gallery.html">Gallery</a>
                <ul>
                    <li><a href="gallery.html">Standard</a></li>
                    <li><a href="gallery-masonry.html">Masonry</a></li>
                </ul>
            </li>
            <li>
                <a href="features.html">Features</a>
                <ul>
                    <li><a href="features.html">Features</a></li>
                    <li><a href="layout-left.html">Left layout</a></li>
                    <li><a href="layout-right.html">Right layout</a></li>
                    <li><a href="layout-center.html">Centered layout</a></li>
                    <li><a href="layout-center-black.html">Centered layout (black)</a></li>
                    <li><a href="layout-title.html">Layout with title</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $this->createUrl('blog/index'); ?>">Blog</a>
            </li>
            <li>
                <a href="showreel.html">Showreel</a>
            </li>
            <li>
                <a href="<?php echo $this->createUrl('site/contact'); ?>">Contacto</a>
            </li>
        </ul>

        <!-- Mobile navigation -->
        <div class="mobile"></div>

    </nav>

    <!-- Social Networks -->
    <ul class="social">
        <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/social/facebook.png" alt="Facebook"></a></li>
        <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/social/twitter.png" alt="Twitter"></a></li>
        <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/social/google+.png" alt="Google+"></a></li>
        <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/social/linkedin.png" alt="LinkedIn"></a></li>
        <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/social/flickr.png" alt="Flickr"></a></li>
        <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/social/dribbble.png" alt="Dribbble"></a></li>
        <li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/social/e-mail.png" alt="E-mail"></a></li>
    </ul>

</header>

<?php echo $content; ?>

<div class="clear"></div>

</body>

</html>
