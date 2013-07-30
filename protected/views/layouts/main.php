<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

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
                <a href="blog.html">Blog</a>
                <ul>
                    <li><a href="news.html">News</a></li>
                    <li><a href="blogpost.html">Blogpost</a></li>
                </ul>
            </li>
            <li><a href="showreel.html">Showreel</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

        <!-- Mobile navigation -->
        <div class="mobile"></div>

    </nav>

    <!-- Social -->
    <ul class="social">
        <li><a href="#"><img src="img/social/glyphicons_390_facebook.png" alt="Facebook"></a></li>
        <li><a href="#"><img src="img/social/glyphicons_392_twitter.png" alt="Twitter"></a></li>
        <li><a href="#"><img src="img/social/glyphicons_362_google+_alt.png" alt="Google+"></a></li>
        <li><a href="#"><img src="img/social/glyphicons_377_linked_in.png" alt="LinkedIn"></a></li>
        <li><a href="#"><img src="img/social/glyphicons_395_flickr.png" alt="Flickr"></a></li>
        <li><a href="#"><img src="img/social/glyphicons_374_dribbble.png" alt="Dribbble"></a></li>
        <li><a href="#"><img src="img/social/glyphicons_399_e-mail.png" alt="E-mail"></a></li>
    </ul>

</header>

<?php echo $content; ?>

<div class="clear"></div>


</body>
</html>
