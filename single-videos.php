<?php get_header(); ?>

<?php require get_template_directory() . '/nav.php'; ?>

<main class="main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>


                <div class="post-container" id="pageContainer">
                    <h2 class="mobile-title"><?php the_title() ?></h2>
                        <?php
                        $description = get_field('description');
                        if( !empty( $description )): ?>
                        <h4>
                            <?php echo $description; ?>
                        </h4>
                        <?php endif; ?>

                        <?php
                        $year = get_field('year_and_place');
                        if( !empty( $year )): ?>
                        <p>
                            <?php echo $year; ?>
                        </p>
                        <?php endif; ?>
                        
                        <div class="video-container">
                            <?php 
                            $video = get_field('video');
                            if( !empty( $video)  ): ?>
                                <video controls>
                                    <source src="<?php echo $video; ?>" type="video/mp4">
                                </video>
                            <?php endif; ?>
                        </div>
                </div>

        <?php endwhile; ?>
</main>

<?php get_footer(); ?>