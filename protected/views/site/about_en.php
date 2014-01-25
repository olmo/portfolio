<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About us';
$this->breadcrumbs=array(
	'About Us',
);
?>

<div class="container">

    <h2>A new <strong>art</strong> concept</h2>

    <div class="row">
        <div class="span10">
            <p align="justify" class="lead">
                <span class="alternative-font">Global-Arte</span> brings art to collectors in a simple and economical way . We offer a variety of works in different  sizes and techniques performed by novice and established artists , always with excellent value for money and respecting the originality of the work in limited editions.
            </p>
        </div>
    </div>

    <hr class="tall">

    <div class="row">
        <div class="span8">
            <h3><strong>Who</strong> we are</h3>
            <p align="justify">Global- art arises in Granada to provide a new space for art lovers. Our ideology is that people sensitive to good artistic works have possibility of collecting art with high quality at a reasonable price. As works are limited, you certainly will gain value. We differ from traditional galleries that we offer original works, authenticating the handwritten signature of the author, and there are only a very limited number of copies . Therefore, our art prints can be framed between the original unique work of art galleries unaffordable for many art lovers and massive industrial reproductions that can be purchased in the museum shop or mall and prices that are impersonal .</p>
            <p align="justify">In our catalogs you can find amazing works from a price of 25 euros. This allows any home or space, can acquire high-quality artworks and collections that will increase in value.</p>
            <p align="justify">We have a comfortable space where you can see the graphic work, in addition to the one shown in our website, where we distinguish already established authors of photography and graphic design, as well as promising  young artists that make our purchases will revalue soon and they cannot find elsewhere.</p>
        </div>
        <div class="span4">
            <div class="featured-box featured-box-secundary">
                <div class="box-content">
                    <h4><span style="color: #a60f33;">Simulations</span></h4>
                    <!-- <ul class="flickr-feed" data-plugin-options='{"qstrings": { "id": "93691989@N03" }}'></ul> -->
                    <ul class="flickr-feed">
                        <table width="308" height=202"">
                        <tr>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion1.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion1.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion2.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion2.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion3.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion3.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion4.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion4.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion5.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion5.jpg" style="height: 75px"/>
                                    </span>
                                </a>
                            </td>
                            <td align="center">
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion6.jpg">
                                    <span class="thumbnail">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/simulacion6.jpg" style="height: 75px"/>
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

            <ul class="timeline">
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/1.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <p><h4>Limited <strong>Editions</strong></h4></p>
                            <br/>
                            <p align="justify">The number of copies is limited and always appear in the acquired form. All works are signed and cannot be found in other galleries or shops.</p>
                        </div>
                    </div>
                </li>
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/2.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <p><h4><strong>Team</strong></h4></p>
                            <br/>
                            <p align="justify">Our team is born  due to the passion for the art of a group of friends . This team is growing every day with the addition of artists who entrust us with their works, after a thorough selection process. This passion and our proven experience makes the demand for quality  one of our main goals for all jobs of Global- Arte .</p>
                        </div>
                    </div>
                </li>
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/3.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <p><h4><strong>Quality</strong></h4></p>
                            <br/>
                            <p align="justify">Each artist, along with our consultant and technical team , choose the format  best suited for each work to ensuring the highest quality printing and the endings , so each creation is presented in the most suitable format.</p>
                        </div>
                    </div>
                </li>
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/4.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">
                            <p><h4><strong>Gift</strong> Vouchers</h4></p>
                            <br/>
                            <p align="justify">We also offer different gift vouchers to please your family and friends.Whoever receives the voucher, besides being able to choose on our website ,will get personalized advice from our team .</p>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>

</div>
