<?php
/* @var $this BlogController */
/* @var $data Entrada */
?>
<article>
    <h2><a href="<?php echo $this->createUrl('blog/view',array('id'=>$data->id)); ?>"><?php echo CHtml::encode($data->titulo); ?></a></h2>

    <div class="meta">
        <span class="date"><?php echo CHtml::encode($data->fecha_publicacion); ?></span>
        <span>por <a href="#"><?php echo CHtml::encode($data->autor); ?></a></span>
        <span>in <a href="#">Photography</a></span>
    </div>

    <?php echo $data->texto; ?>

    <a href="<?php echo $this->createUrl('blog/view',array('id'=>$data->id)); ?>" class="read_more">Leer más »</a>
</article>

<section class="layout left blog"><div class="skew"></div>

    <!-- Articles -->
    <ul class="articles">

        <li>
            <article class="clearfix">

                <!-- Title -->
                <h2><a href="blogpost.html">Lorem ipsum dolor sit amet (standard)</a></h2>

                <!-- Meta -->
                <div class="meta">
                    <span class="date">August 12, 2012</span>
                    <span>by <a href="#">Equiet</a></span>
                    <span>in <a href="#">Photography</a></span>
                </div>

                <!-- Excerpt -->
                <p>Pellentesque luctus porta ipsum non vulputate. Sed vitae felis nunc, eu euismod leo. Sed blandit neque non eros tincidunt bibendum. Nunc molestie felis eget nisl laoreet dignissim ut non velit. Nunc ligula mi, convallis non laoreet id, ullamcorper ut sem.</p>

                <!-- Read more -->
                <a href="blogpost.html" class="read_more">Read more »</a>

            </article>
        </li>

        <li>
            <article class="clearfix">

                <!-- Title -->
                <h2><a href="blogpost.html">Cras sit amet dolor justo (quote)</a></h2>

                <!-- Meta -->
                <div class="meta">
                    <span class="date">August 07, 2012</span>
                    <span>by <a href="#">Equiet</a></span>
                    <span>in <a href="#">Webdesign</a></span>
                </div>

                <!-- Quote -->
                <blockquote>
                    Cras sit amet dolor justo, a luctus lacus. Maecenas libero metus, laoreet vel fringilla ac, dictum vel elit. Maecenas at mauris ligula, sed consequat lorem.
                    <cite>Author</cite>
                </blockquote>

                <!-- Read more -->
                <a href="blogpost.html" class="read_more">Read more »</a>

            </article>
        </li>

        <li>
            <article class="clearfix">

                <!-- Title -->
                <h2><a href="blogpost.html">Pellentesque luctus porta (gallery)</a></h2>

                <!-- Meta -->
                <div class="meta">
                    <span class="date">July 15, 2012</span>
                    <span>by <a href="#">Equiet</a></span>
                    <span>in <a href="#">Photography</a></span>
                </div>

                <!-- Gallery -->
                <div class="slider_wrapper"><ul class="simple_slider">
                        <li class="selected"><img src="placeholders/520x300/1.jpg" alt=""></li>
                        <li><img src="placeholders/520x300/2.jpg" alt=""></li>
                        <li><img src="placeholders/520x300/3.jpg" alt=""></li>
                        <li><img src="placeholders/520x300/4.jpg" alt=""></li>
                    </ul>        <div class="slider_controls">          <a href="#" class="prev"></a>          <a href="#" class="next"></a>        </div>      </div>

                <!-- Excerpt -->
                <p>Pellentesque luctus porta ipsum non vulputate. Sed vitae felis nunc, eu euismod leo. Sed blandit neque non eros tincidunt bibendum. Nunc molestie felis eget nisl laoreet dignissim ut non velit. Nunc ligula mi, convallis non laoreet id, ullamcorper ut sem.</p>

                <!-- Read more -->
                <a href="blogpost.html" class="read_more">Read more »</a>

            </article>
        </li>

        <li>
            <article class="clearfix">

                <!-- Title -->
                <h2><a href="blogpost.html">Sed vitae felis nunc (YouTube)</a></h2>

                <!-- Meta -->
                <div class="meta">
                    <span class="date">July 01, 2012</span>
                    <span>by <a href="#">Equiet</a></span>
                    <span>in <a href="#">Videos</a></span>
                </div>

                <!-- YouTube -->
                <div class="flex"><iframe src="http://www.youtube.com/embed/Ip2ZGND1I9Q"></iframe></div>

                <!-- Excerpt -->
                <p>Pellentesque luctus porta ipsum non vulputate. Sed vitae felis nunc, eu euismod leo. Sed blandit neque non eros tincidunt bibendum. Nunc molestie felis eget nisl laoreet dignissim ut non velit. Nunc ligula mi, convallis non laoreet id, ullamcorper ut sem.</p>

                <!-- Read more -->
                <a href="blogpost.html" class="read_more">Read more »</a>

            </article>
        </li>

        <li>
            <article class="clearfix">

                <!-- Title -->
                <h2><a href="blogpost.html">Sed vitae felis nunc (Vimeo)</a></h2>

                <!-- Meta -->
                <div class="meta">
                    <span class="date">June 29, 2012</span>
                    <span>by <a href="#">Equiet</a></span>
                    <span>in <a href="#">Videos</a></span>
                </div>

                <!-- Vimeo -->
                <div class="flex"><iframe src="http://player.vimeo.com/video/11673745"></iframe></div>

                <!-- Excerpt -->
                <p>Pellentesque luctus porta ipsum non vulputate. Sed vitae felis nunc, eu euismod leo. Sed blandit neque non eros tincidunt bibendum. Nunc molestie felis eget nisl laoreet dignissim ut non velit. Nunc ligula mi, convallis non laoreet id, ullamcorper ut sem.</p>

                <!-- Read more -->
                <a href="blogpost.html" class="read_more">Read more »</a>

            </article>
        </li>

    </ul>


    <!-- Pagination -->
    <div class="pagination">
        <a href="#">« Previous posts</a>
        <a href="#">Next posts »</a>
    </div>

</section>
