<?php get_header() ?>
    <!-- Content
       ================================================== -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="content-outer">

        <div id="page-content" class="row">

            <div id="primary" class="eight columns">

                <article class="post">

                    <div class="entry-header cf">

                        <h1><?php the_title()?></h1>

                        <p class="post-meta">

                            <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS Y');?></time>
                            /
                            <span class="categories">
                             <?php the_tags('', ' / ')  ?>
                             </span>
                        </p>

                    </div>

                    <div class="post-thumb">
                        <a href="<?php the_permalink();?>" title=""><?php the_post_thumbnail(); ?></a>
                    </div>

                    <div class="post-content">

                        <p><?php the_content(); ?></p>
<!--                        <ul class="post-nav cf">-->
<!--                            <li class="prev"><a rel="prev" href="#"><strong>Previous Article</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>-->
<!--                            <li class="next"><a rel="next" href="#"><strong>Next Article</strong> Morbi Elit Consequat Ipsum</a></li>-->
<!--                        </ul>-->

                    </div>

                </article> <!-- post end -->
            <?php endwhile; ?>
            <?php endif; ?>
            </div>

            <div id="secondary" class="four columns end">

                <?php get_sidebar(); ?>

            </div> <!-- Comments End -->

        </div>

    </div> <!-- Content End-->
<?php get_footer() ?>