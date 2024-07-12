<div id="hamburger" class="hamburger hamburger4">  
    <span class="bar bar1"></span>
    <span class="bar bar2"></span>
    <span class="bar bar3"></span>
    <span class="bar bar4"></span>
    <span class="bar bar5"></span>
</div>
<a class="mobile-logo" href="<?php echo home_url(); ?>">SWEZA</a>
<?php
    $current_page_id = get_the_ID();
    $current_slug = '';
    if (is_single()) {
        $current_slug = get_post_field('post_name', $current_page_id);
    }
?>
<nav class="navigation" role="navigation" id="navigation">
    <a class="logo" href="<?php echo home_url(); ?>">SWEZA</a>
    <div class="nav-category" id="navWork">
        <span class="plus"><img src="<?php echo get_template_directory_uri() ?>/img/plus.png" alt="plus symbol"/></span>
        <span class="minus"><img src="<?php echo get_template_directory_uri() ?>/img/minus.png" alt="minus symbol"/></span>
        <h4>WORK</h4>
    </div>
    <?php
        $workArgs = array(
            'posts_per_page'   => -1,
            'post_type'        => 'artwork'
        );
        $the_work_query = new WP_Query( $workArgs );
        $artwork_count = $the_work_query->post_count;
    ?>
    <div id="navWorkLinks" class="nav-links <?php if ( is_singular( 'artwork' ) ) echo 'custom-post'?>">
        <?php while ( $the_work_query->have_posts() ): $the_work_query->the_post();?>
            <?php $slug = get_post_field( 'post_name', get_post() ); ?>
            <a href="<?php the_permalink(  );?>" class="nav-link <?php if ($slug == $current_slug) echo ' active-link' ?>">
            <span class="minus-secondary"><img src="<?php echo get_template_directory_uri() ?>/img/minus.png" alt="minus symbol"/></span>
            <?php the_title() ?>
            </a>
        <?php endwhile; wp_reset_postdata();?>
    </div>
    <div class="nav-category" id="navVideos">
        <span class="plus"><img src="<?php echo get_template_directory_uri() ?>/img/plus.png" alt="plus symbol"/></span>
        <span class="minus"><img src="<?php echo get_template_directory_uri() ?>/img/minus.png" alt="minus symbol"/></span>
        <h4>VIDEOS</h4>
    </div>
    <?php
        $videosArgs = array(
            'posts_per_page'   => -1,
            'post_type'        => 'videos'
        );
        $the_videos_query = new WP_Query( $videosArgs );
    ?>
    <div id="navVideosLinks" class="nav-links <?php if ( is_singular( 'videos' ) ) echo 'custom-post'?>">
        <?php while ( $the_videos_query->have_posts() ): $the_videos_query->the_post();?>
        <?php $slug = get_post_field( 'post_name', get_post() ); ?>
            <a href="<?php the_permalink(  );?>" class="nav-link <?php if ($slug == $current_slug) echo ' active-link' ?>"> 
            <span class="minus-secondary"><img src="<?php echo get_template_directory_uri() ?>/img/minus.png" alt="minus symbol"/></span>
            <?php the_title() ?>
            </a>
        <?php endwhile; wp_reset_postdata();?>
    </div>
    <div class="page-link-container">
        <a class="page-link" href="<?php echo home_url(); ?>/exhibitions">EXHIBITIONS</a>
        <a class="page-link" href="<?php echo home_url(); ?>/publications">PUBLICATIONS</a>
        <a class="page-link" href="<?php echo home_url(); ?>/curriculum-vitae">CURRICULUM VITAE</a>
        <a class="page-link" href="<?php echo home_url(); ?>/contact">CONTACT</a>
    </div>
</nav>