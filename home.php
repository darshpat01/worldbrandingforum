<?php /* Template Name: Home */

get_header(); ?>

<!-- Slider stat here -->
<div id="slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php if (have_rows('banner')) : $i = 0; ?>
            <?php while (have_rows('banner')) : the_row();
                $img = get_sub_field('b-image');
                $title = get_sub_field('b-heading');
                $content = get_sub_field('b-content'); ?>
                <div class="carousel-item  <?php if ($i == 0) echo 'active'; ?>">
                    <img src="<?php echo $img; ?>" />
                    <div class="carousel-caption pb-md-5">
                        <h2><?php echo $title; ?></h2>
                        <div class="content"><?php echo $content; ?></div><br>
                        <a href="#" class="btn">Register Now</a>
                    </div>
                </div>
        <?php $i++;
            endwhile;
        endif; ?>
    </div>
    <a class="carousel-control-prev fa fa-angle-left" href="#slider" role="button" data-slide="prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
        </svg>
    </a>
    <a class="carousel-control-next fa fa-angle-right" href="#slider" role="button" data-slide="next">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
        </svg>
    </a>
</div>
<!-- Slider end here -->

<section class="py-5">
    <div class="container text-center">
        <?php the_content(); ?>
        <div class="row page_list mt-5">
            <?php if (have_rows('page_list')) : $i = 0; ?>
                <?php while (have_rows('page_list')) : the_row();
                    $page = get_sub_field('page');
                ?>
                    <div class="col-md-4">
                        <div style="background:url(<?php echo get_the_post_thumbnail_url($page); ?>) no-repeat center center/cover;" class="position-relative">
                            <div class="hover d-flex align-items-center position-relative text-white p-3 py-4">
                                <h2 class="text-uppercase text-white position-absolute d-flex h-100 w-100 align-items-center justify-content-center">
                                    <?php echo get_the_title($page); ?>
                                </h2>
                                <div>
                                    <p class="text-white">
                                        <?php $trimmed_content = wp_trim_words(get_the_content($page), 40, '');
                                        echo $trimmed_content; ?>
                                    </p>
                                    <a class="text-uppercase btn" href="<?php echo get_the_permalink($page); ?>">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php $i++;
                endwhile;
            endif; ?>
        </div>

        <div class="ceremony_content h2 pt-5"><?php echo get_field('ceremony_content') ?></div>
        <div id="timer" class="d-flex flex-wrap justify-content-center"> </div>
    </div>
</section>

<section class="py-5 bg-light border-top border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?php echo get_field('prize_in_branding_video') ?>" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6"><?php echo get_field('prize_in_branding') ?></div>
        </div>
    </div>
</section>

<section class="branding_awards_content py-5">
    <div class="container h1 m-0 text-center mx-auto my-4"><?php echo get_field('branding_awards_content') ?></div>
    <?php $images = get_field('branding_awards');
    if ($images) : ?>
        <div class="branding_awards no-gutters row mt-5">
            <?php foreach ($images as $image) : ?>
                <div class="col">
                    <a href="#" class="d-block">
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div class="container my-md-4 text-center pt-md-5">
        <h3><?php echo get_field('winning_brand_content') ?></h3>
    </div>
</section>

<section class="py-5 our_achievements" style="background:url(<?php echo get_field('our_achievements_img') ?> ) no-repeat center center/cover; background-attachment:fixed;">
    <div class="container my-4">
        <?php echo get_field('our_achievements') ?>
    </div>
</section>

<section class="py-5 bg-light border-top border-bottom">
    <div class="container">
        <div class="row align-items-md-center  text-center">
            <div class="col-md-4">
                <img class="img-fluid" src="<?php echo get_field('judging-image') ?>" alt="">
            </div>
            <div class="col-md-8">
                <h2 class="mb-4">UNIQUE JUDGING PROCESS </h2>
                <div class="row">
                    <?php if (have_rows('judging_process_content')) : $i = 1; ?>
                        <?php while (have_rows('judging_process_content')) : the_row();
                            $title = get_sub_field('process_name');
                            $content = get_sub_field('process_count');
                        ?>
                            <div class="col-md-4">
                                <div class="card p-3 border rounded">
                                    <h6><?php echo $title; ?></h6>
                                    <h6><?php echo $content; ?> </h6>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $content; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $content; ?>%"></div>
                                    </div>
                                </div>
                            </div>
                    <?php $i++;
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </div>

        <div class="chairman_message py-4 mt-5 text-center">
            <?php echo get_field('chairman_message') ?>
        </div>

        <?php $images = get_field('featured_winners');
        if ($images) : ?>
            <h2 class="text-center">
                FEATURED WINNERS
            </h2>
            <div class="featured_winners text-center">
                <?php foreach ($images as $image) : ?>
                    <a href="#" class="item">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<section class="media_coverage py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php $images = get_field('media_coverage');
                if ($images) : ?>
                    <div class="media_coverage d-flex justify-content-between">
                        <?php foreach ($images as $image) : ?>
                            <a href="#" class="item">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-3 ml-auto">
                <a href="#" class="btn">See Media Coverage</a>
            </div>
        </div>

    </div>
</section>

<?php get_footer();
