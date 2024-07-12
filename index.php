<?php get_header(); ?>

<?php require get_template_directory() . '/nav.php'; ?>

<div class="page-container">
    <?php 
        $recent = new WP_Query("page_id=243");
        while ($recent->have_posts()) : $recent->the_post();
            the_content();
        endwhile;
        wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>