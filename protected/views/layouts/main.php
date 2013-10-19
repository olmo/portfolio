<?php /* @var $this Controller */ ?>

<?php

    /*Yii::app()->clientScript->registerCoreScript('jquery');
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/js/libs/jquery-1.7.2.min.js', CClientScript::POS_END);*/
	
?>



<!doctype html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,IE=9,IE=8,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta itemprop="image" content="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png" />
    <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
    
    
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    
	<meta name="description" content="" />
	<meta name="author" content="MEDIACREED.COM" />
    <!--<meta name="fragment" content="!">-->
    
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/video-js/video-js.min.css" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic|PT+Sans+Caption:400,700' rel='stylesheet' type='text/css' />        
        
        <!-- SCRIPT IE FIXES -->  
        <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 
        <!-- END SCRIPT IE FIXES-->
      
      
        <!-- START TEMPLATE JavaScript load -->
    	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/libs/jquery-1.7.2.min.js"></script>    
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/libs/modernizr.custom.min.js"></script> 
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/libs/jquery.wipetouch.js"></script>   
             
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=true"></script>
        
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/libs/jquery.gmap.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/greensock/minified/TweenMax.min.js"></script>    
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/libs/jquery.timer.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/libs/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/audio-js/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/audio-js/jplayer.playlist.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/mediacreed/scrollbar/mc.custom.list.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/mc.modules.animation.js"></script> 
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/video-js/video.min.js"></script>
        <!-- END TEMPLATE JavaScript load ---->
        
        <!--<script src="http://vjs.zencdn.net/c/video.js"></script>    
        Careful when using the online version because the destroy method throws an error.    
        Our version has the fix on destroy method. Until it updates we recommend using the JS file from the template.    
        -->
        <script>
            _V_.options.flash.swf = "js/video-js/video-js.swf";
            _V_.options.techOrder = ["html5", "flash", "links"];
            var params = {};
            params.bgcolor = "#000000";
            params.allowFullScreen = "true";       
            _V_.options.flash.params = params;
    
        </script>    
</head>

<body>

<div class="main-template-loader"></div>

<div id="template-wrapper">
    <div id="menu-container"><!-- start #menu-container -->        
        <div class="menu-content-holder"><!-- start .menu-content-holder -->
            <div class="menu-background"></div>
            <div id="template-logo" class="template-logo" data-href="#portfolio.html"></div> 
            <div id="template-menu" class="template-menu" data-current-module-type="full_width_gallery" data-side="none" data-href="/index.php/blog"><!-- start #template-menu -->
                <div class="menu-option-holder">
                    <div id="menu-option-background" class="menu-option-background"> </div>
                    <div id="menu-option-text" class="menu-option-text">
                        <a href="#">HOME</a>
                        <div class="menu-option-sign">+</div>
                    </div>                
                    <div class="sub-menu-holder">
                        <div class="sub-menu-option-holder" data-module-type="slideshow" data-side="none">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#home_layout_1.html" data-path-href="html/home/">Home Layout 1</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="home2" data-side="none">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#home_layout_2.html" data-path-href="html/home/">Home Layout 2</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="home3" data-side="none">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#home_layout_3.html" data-path-href="html/home/">Home Layout 3</a></div>
                        </div>
                        
                    </div>         
                </div>
                <div class="menu-option-holder">
                    <div id="menu-option-background" class="menu-option-background"> </div>
                    <div id="menu-option-text" class="menu-option-text">
                        <a href="#">ABOUT US</a>
                        <div class="menu-option-sign">+</div>
                    </div>
                    <div class="sub-menu-holder">
                        <div class="sub-menu-option-holder" data-module-type="text_page" data-side="height">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#about_us.html" data-path-href="html/about_us/">About us</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="text_page" data-side="none">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#philosophy.html" data-path-href="html/about_us/">Philosophy</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="text_page" data-side="height">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#ethics.html" data-path-href="html/about_us/">Ethics</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="text_page" data-side="none">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#careers.html" data-path-href="html/about_us/">Careers</a></div>
                        </div>                        
                    </div>
                </div>
                <div class="menu-option-holder" data-module-type="news" data-side="height">
                    <div id="menu-option-background" class="menu-option-background"> </div>
                    <div id="menu-option-text" class="menu-option-text"><a href="index.php/blog" data-path-href="index.php/blog/">NEWS</a></div>
                </div>  
                <div class="menu-option-holder" data-module-type="full_width_gallery" data-side="none">
                    <div id="menu-option-background" class="menu-option-background"> </div>
                    <div id="menu-option-text" class="menu-option-text"><a href="#portfolio.html" data-path-href="html/portfolio/">PORTFOLIO</a></div>
                </div> 
                <div class="menu-option-holder">
                    <div id="menu-option-background" class="menu-option-background"> </div>
                    <div id="menu-option-text" class="menu-option-text"><a href="#">OUR PROJECTS</a><div class="menu-option-sign">+</div></div>
                    <div class="sub-menu-holder">
                        <div class="sub-menu-option-holder" data-module-type="page_columns" data-side="custom">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#4_columns_projects.html" data-path-href="html/our_projects/">4 Columns Projects</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="page_columns" data-side="custom">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#3_columns_projects.html" data-path-href="html/our_projects/">3 Columns Projects</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="page_columns" data-side="custom">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#2_columns_projects.html" data-path-href="html/our_projects/">2 Columns Projects</a></div>
                        </div>
                    </div>
                </div>               
                <div class="menu-option-holder" data-module-type="showreel" data-side="none">
                    <div id="menu-option-background" class="menu-option-background"> </div>
                    <div id="menu-option-text" class="menu-option-text"><a href="#showreel.html" data-path-href="html/showreel/">SHOWREEL</a></div>
                </div>                               
                <div class="menu-option-holder">
                    <div id="menu-option-background" class="menu-option-background"> </div>
                    <div id="menu-option-text" class="menu-option-text"><a href="#">GALLERIES</a><div class="menu-option-sign">+</div></div>
                    <div class="sub-menu-holder">
                        <div class="sub-menu-option-holder" data-module-type="gallery" data-side="none">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#image_gallery.html" data-path-href="html/galleries/">Image Gallery</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="gallery" data-side="none">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#mixed_gallery.html" data-path-href="html/galleries/">Mixed Gallery</a></div>
                        </div>                        
                    </div>
                </div>                
                <div class="menu-option-holder">
                    <div id="menu-option-background" class="menu-option-background"> </div>
                    <div id="menu-option-text" class="menu-option-text"><a href="#">FEATURES</a><div class="menu-option-sign">+</div></div>
                    <div class="sub-menu-holder">
                        <div class="sub-menu-option-holder" data-module-type="full_width" data-side="custom">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#full_width_text_and_image.html" data-path-href="html/features/">Fullwidth Text + Image</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="full_width" data-side="custom">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#full_width_text_and_video.html" data-path-href="html/features/">Fullwidth Text + Video</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="fullscreen_video" data-side="none">
                            <div class="sub-menu-option-background"></div>
                            <div class="sub-menu-option-text"><a href="#fullscreen_video.html" data-path-href="html/features/">Fullscreen Video</a></div>
                        </div>
                        <div class="sub-menu-option-holder" data-module-type="pricing_tables" data-side="none">
                            <div class="sub-menu-option-background"> </div>
                            <div class="sub-menu-option-text"><a href="#pricing_tables.html" data-path-href="html/features/">Pricing Table</a></div>
                        </div>
                    </div>
                </div>
                <div class="menu-option-holder" data-module-type="contact" data-side="custom">
                    <div id="menu-option-background" class="menu-option-background"> </div>
                    <div id="menu-option-text" class="menu-option-text"><a href="#contact.html" data-path-href="html/contact/">CONTACT US</a></div>
                </div>            
            </div><!-- end #template-menu -->  
            <div id="template-smpartphone-menu">
                <select>
                    <option value="#">Navigate to...</option>
                    <option value="#"> HOME +</option>
                        <option value="#home_layout_1.html">  - Home Layout 1</option>
                        <option value="#home_layout_2.html">  - Home Layout 2</option>
                        <option value="#home_layout_3.html">  - Home Layout 3</option>
                    <option value="#"> ABOUT US +</option>
                        <option value="#about_us.html">  - About us</option>
                        <option value="#philosophy.html">  - Philosophy</option>
                        <option value="#ethics.html">  - Ethics</option>
                        <option value="#careers.html">  - Careers</option>
                    <option value="#news.html"> NEWS</option>
                    <option value="#portfolio.html"> PORTFOLIO</option>
                    <option value="#"> OUR PROJECTS +</option>
                        <option value="#4_columns_projects.html">  - 4 Columns Projects</option>
                        <option value="#3_columns_projects.html">  - 3 Columns Projects</option>
                        <option value="#2_columns_projects.html">  - 2 Columns Projects</option>
                    <option value="#showreel.html"> SHOWREEL</option>    
                    <option value="#"> GALLERIES +</option>
                        <option value="#image_gallery.html">  - Image Gallery</option>
                        <option value="#mixed_gallery.html">  - Mixed Gallery</option>
                    <option value="#"> FEATURES +</option>
                        <option value="#full_width_text_and_image.html">  - Full Width Text + Image</option>
                        <option value="#full_width_text_and_video.html">  - Full Width Text + Video</option>
                        <option value="#fullscreen_video.html">  - Fullscreen Video</option>
                        <option value="#pricing_tables.html">  - Pricing Table</option>  
                    <option value="#contact.html"> CONTACT</option>
                </select>
            </div>
			<div id="audio-player" data-auto-play="true" data-player-opened="true" data-player-volume="0.6">
                <div id="audio-items">
                    <div id="audio-track" data-src="assets/audio/on_top_of_the_world" data-title="Tim McMorris - Top Of The World"></div>
                    <div id="audio-track" data-src="assets/audio/overwhelmed" data-title="Tim McMorris - Overwhelmed"></div>
                    <div id="audio-track" data-src="assets/audio/playing" data-title="Tim McMorris - Playing"></div>
                    <div id="audio-track" data-src="assets/audio/happy" data-title="Tim McMorris - Happy"></div>                    
                </div>
                <div id="audio-player-tooltip" class="opacity_0">
                    <div id="audio-tooltip-holder">
                        <div class="audio-tooltip-backg"></div>
                        <div class="audio-player-tooltip-title"><span></span></div>
                    </div>
                    <div class="audio-player-tooltip-hook"></div>                    
                </div>
                <div id="audio-player-holder">
                    <div id="audio-options-button">
                        <div class="audio-options-button-backg"></div>
                        <div class="audio-options-button-sign"></div>
                    </div>
                    <div id="audio-player-options-holder">                    
                        <div id="audio-prev-track">
                            <div class="audio-controls-backg"></div>
                            <div class="audio-prev-track-sign"></div>
                        </div>
                        <div id="audio-play-pause-track">
                            <div class="audio-controls-backg"></div>
                            <div class="audio-play-track-sign"></div>
                            <div class="audio-pause-track-sign"></div>
                        </div>
                        <div id="audio-next-track">
                            <div class="audio-controls-backg"></div>
                            <div class="audio-next-track-sign"></div>
                        </div>
                        <div id="audio-volume-speaker">
                            <div class="audio-controls-backg"></div>
                            <div class="audio-volume-on-sign"></div>
                            <div class="audio-volume-off-sign"></div>
                        </div>
                        <div id="audio-volume-bar">
                            <div class="audio-volume-bar-scrub-backg"></div>
                            <div class="audio-volume-bar-scrub-current"></div>
                        </div>                        
                    </div>                    
                </div>
            </div>
            <footer>    
                <div id="footer-social">            
                    <div id="footer-social-holder">
                        <ul>
                            <li class="twitter"><a href="http://www.twitter.com" target="_blank"></a></li>
                            <li class="facebook"><a href="http://www.facebook.com" target="_blank"></a></li>
                            <li class="google"><a href="http://www.google.com" target="_blank"></a></li>
                            <li class="dribbble"><a href="http://www.dribbble.com" target="_blank"></a></li>
                            <li class="flickr"><a href="http://www.flickr.com" target="_blank"></a></li>
                        </ul>
                    </div>                   
                </div>    
                <div id="footer-text"><!-- start #footer-text -->
                    <div id="footer-copyright"><a href="#">&copy;2012 YOUR-COMPANY.COM</a></div>           
                </div><!-- end #footer -->    
            </footer> 
        </div><!-- end .menu-content-holder-->
        
        <div id="menu-hider">
            <div id="menu-hider-background"></div>
            <div id="menu-hider-icon"></div>
        </div>
    </div><!-- end #menu-container -->

    <div id="module-container">
	<?php echo $content; ?>
    </div>
    
</div>

<div id="load-container">
</div>

<div id="loading-animation">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/loaders/loader.gif" width="16" height="11" alt="Synergy - loading animation"/>
</div>
<div id="footer-social-tooltip"></div>

<div id="console-log"></div>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script> 
</body>
</html>


