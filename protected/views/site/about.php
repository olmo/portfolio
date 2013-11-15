<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Sobre Nosotros';
$this->breadcrumbs=array(
	'Sobre Nosotros',
);
?>

<div class="container">

    <h2>El Nuevo Camino hacia el <strong>Éxito</strong></h2>

    <div class="row">
        <div class="span10">
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">conócenos.</span> pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh.
            </p>
        </div>
    </div>

    <hr class="tall">

    <div class="row">
        <div class="span8">
            <h3><strong>Quiénes</strong> somos</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
            <p>Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing <span class="alternative-font">conócenos</span> sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula.</p>
        </div>
        <div class="span4">
            <div class="featured-box featured-box-secundary">
                <div class="box-content">
                    <h4><span style="color: #a60f33;">Imágenes</span></h4>
                    <!-- <ul class="flickr-feed" data-plugin-options='{"qstrings": { "id": "93691989@N03" }}'></ul> -->
                    <ul class="flickr-feed">
                        <table width="308" height=202"">
                        <tr>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/1.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/1.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/2.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/2.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/3.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/3.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/4.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/4.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/5.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/5.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/6.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/6.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        </table>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="tall">

    <div class="row">
        <div class="span12">
            <h3 class="pull-top">Nuestra <strong>Historia</strong></h3>
        </div>
    </div>

    <div class="row">
        <div class="span12">

            <ul class="timeline">
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/2012.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4><strong>2012</strong></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus,</p>
                        </div>
                    </div>
                </li>
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/2010.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4><strong>2010</strong></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.</p>
                        </div>
                    </div>
                </li>
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/2005.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4><strong>2005</strong></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus,</p>
                        </div>
                    </div>
                </li>
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/2000.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <h4><strong>2000</strong></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus,</p>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>

</div>
