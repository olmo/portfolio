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
	<meta charset="utf-8" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.fancybox-1.3.4.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<header class="clearfix">
    <h1 class="black">
        <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt=""></a>
    </h1>

    <nav>
        <!-- Desktop navigation -->
        <?php $this->widget('application.components.MenuModificado',array(
            'activateItemsOuter'=>false,
            'activeCssClass'=>'selected',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Vinilos', 'url'=>array('/galeria/index'), 'items'=>array(
                    array('label'=>'Nuevo vinilo', 'url'=>array('galeria/create'), 'visible'=>!Yii::app()->user->isGuest ),
                    array('label'=>'Administrar vinilo', 'url'=>array('galeria/admin'), 'visible'=>!Yii::app()->user->isGuest ),
                )),
                array('label'=>'Blog', 'url'=>array('/blog/index'), 'items'=>array(
                    array('label'=>'Nueva entrada', 'url'=>array('blog/create'), 'visible'=>!Yii::app()->user->isGuest ),
                    array('label'=>'Administrar entradas', 'url'=>array('blog/admin'), 'visible'=>!Yii::app()->user->isGuest ),
                )),
                array('label'=>'Contacto', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        )); ?>

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
