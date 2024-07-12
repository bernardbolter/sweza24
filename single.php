<?php get_header(); ?>

<?php require get_template_directory() . '/nav.php'; ?>

<main class="main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>


                <div class="post-container">
                        <p><?php echo $post->description ?></p>
                        <p><?php echo $post->place_and_year ?></p>

                        <div class="image-container">
                                <?php 
                                $image_1 = get_field('image_1');
                                if( !empty( $image_1) ): ?>
                                <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1)['alt']; ?>" />
                                <?php endif; ?>

                                <?php 
                                $video_1 = get_field('video_1');
                                if( !empty( $video_1)  ): ?>
                                <video width="954" height="535" controls>
                                <source src="<?php echo $video_1; ?>" type="video/mp4">
                                </video>
                                <?php endif; ?>

                                <?php 
                                $image_1 = get_field('image_1');
                                if( !empty( $image_1) ): ?>
                                <img src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1)['alt']; ?>" />
                                <?php endif; ?>

                                <?php 
                                $video_2 = get_field('video_2');
                                if( !empty( $video_2)  ): ?>
                                <video width="954" height="535" controls>
                                <source src="<?php echo $video_2; ?>" type="video/mp4">
                                </video>
                                <?php endif; ?>
                        <div class="image-container">
                </div>

        <?php endwhile; ?>
</main>

<?php get_footer(); ?>