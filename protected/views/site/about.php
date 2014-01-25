<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Sobre Nosotros';
$this->breadcrumbs=array(
	'Sobre Nosotros',
);
?>

<div class="container">

    <h2>Un nuevo concepto de <strong>arte</strong></h2>

    <div class="row">
        <div class="span10">
            <p align="justify" class="lead">
                <span class="alternative-font">Global-Arte</span> acerca el arte a
                coleccionistas de una forma sencilla y económica. Ofrecemos una gran variedad de obras tanto en tamaños
                como técnicas, realizadas por artistas noveles o consagrados, siempre con una excelente relación
                calidad-precio y respetando la originalidad de la obra en ediciones reducidas.
            </p>
        </div>
    </div>

    <hr class="tall">

    <div class="row">
        <div class="span8">
            <h3><strong>Quiénes</strong> somos</h3>
            <p align="justify"> Global-arte surge en Granada para brindar un espacio nuevo a los amantes del arte. Nuestro ideario es que
                las personas sensibles a las buenas obras artísticas tengan posibilidad de realizar sus adquisiciones y
                coleccionar arte de gran calidad a precios realmente asequibles, que sin duda irán ganando valor al ser
                limitadas. Nos diferenciamos de las galerías tradicionales en que ofrecemos obras originales, con
                autentificación de la firma a mano del autor, de las que sólo existen un número muy limitado. Por tanto,
                nuestra obra gráfica, puede encuadrarse entre la obra única original de las galerías de arte a precios
                inasequibles para muchos amantes del arte  y las masivas reproducciones industriales que pueden
                adquirirse en las tiendas de los museos o cualquier centro comercial y que resultan impersonales.</p>
            <p align="justify"> En nuestros catálogos podrán encontrar maravillosas obras desde un precio de 25 euros. Esto permite que
                cualquier hogar o espacio, pueda dotarse de obras artísticas de gran calidad y adquirir colecciones que
                irán aumentando de valor.</p>
            <p align="justify"> Contamos con confortable espacio donde poder observar la obra gráfica, además de la que se muestra en
                nuestra página web, donde distinguimos autores ya consagrados de la fotografía y el diseño gráfico, así
                como jóvenes y prometedores artistas que harán que nuestras compras se revaloricen pronto, y que no
                podrán encontrar en otros lugares.</p>
        </div>
        <div class="span4">
            <div class="featured-box featured-box-secundary">
                <div class="box-content">
                    <h4><span style="color: #a60f33;">Simulaciones</span></h4>
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

                            <p><h4><strong>Ediciones</strong> limitadas</h4></p>
                            <br/>
                            <p align="justify">El número de copias de cada obra es limitado y siempre aparecerá en el formato adquirido.
                                Todas las obras estarán firmadas y certificadas y no podrán encontrarse en otras galerías
                                ni tiendas.</p>
                        </div>
                    </div>
                </li>
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/2.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">

                            <p><h4><strong>Equipo</strong></h4></p>
                            <br/>
                            <p align="justify">Nuestro equipo nace de una forma natural, de la pasión por el arte de un grupo de amigos.
                                Este equipo crece cada día con la incorporación de artistas que nos confían sus obras, tras un minucioso
                                proceso de selección. Esta pasión junto con nuestra avalada experiencia hace que la exigencia por la
                                calidad sea uno de nuestros principales objetivos para todos los trabajos de Global Arte.</p>
                        </div>
                    </div>
                </li>
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/3.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">

                            <p><h4><strong>Calidad</strong></h4></p>
                            <br/>
                            <p align="justify">Los artistas de cada obra, junto con nuestro equipo asesor y técnico, eligen el medio y
                                formato más adecuado para la misma, de manera que además de garantizar la máxima calidad en impresión y
                                en las terminaciones, con lo que cada creación es presentada en el formato más adecuado.</p>
                        </div>
                    </div>
                </li>
                <li data-appear-animation="fadeInUp">
                    <div class="thumb" data-appear-animation="fadeInRight">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/historia/4.jpg" alt="" />
                    </div>
                    <div class="featured-box">
                        <div class="box-content">

                            <p><h4><strong>Bonos</strong> regalo</h4></p>
                            <br/>
                            <p align="justify">Además ofrecemos el bono regalo de diferentes precios con el que podrás obsequiar de
                                manera abierta. Así quien recibe el bono, además de poder escoger en nuestra página web, recibirá el
                                asesoramiento personalizado de nuestro equipo.</p>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>

</div>
