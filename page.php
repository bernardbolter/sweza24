<?php get_header(); ?>

<?php require get_template_directory() . '/nav.php'; ?>

<main class="main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
                <!-- 
                <header class="post__header" role="heading">
                        <h1 class="post__title"><?php the_title(); ?></h1>
                </header> -->

                <div class="page-container" id="pageContainer">
                        <?php the_content() ?>
                </div>

        <?php endwhile; ?>
</main>

<?php get_footer(); ?>