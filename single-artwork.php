<?php get_header(); ?>

<?php require get_template_directory() . '/nav.php'; ?>

<main class="main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

                <div class="post-container">
                    <div class="art-info-container" id="artInfo">
                        <h2 class="mobile-title"><?php the_title() ?></h2>
                        <?php
                            $description = get_field('description');
                            if( !empty( $description )): ?>
                            <h4>
                                <?php echo $description; ?>
                            </h4>
                        <?php endif; ?>

                        <?php
                            $place_and_year = get_field('place_and_year');
                            if( !empty( $place_and_year )): ?>
                            <p>
                                <?php echo $place_and_year; ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <div class="artworks-container" id="artworkContainer">

                        <?php 
                            $image_1 = get_field('image_1');
                            if( !empty( $image_1) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_1['url']); ?>" />
                                </div>
                        <?php endif; ?>

                            <?php 
                            $video_1 = get_field('video_1');
                            if( !empty( $video_1)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_1; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_2 = get_field('image_2');
                            if( !empty( $image_2) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_2 = get_field('video_2');
                            if( !empty( $video_2)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_2; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_3 = get_field('image_3');
                            if( !empty( $image_3) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_3['url']); ?>" alt="<?php echo esc_attr($image_3)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_3 = get_field('video_3');
                            if( !empty( $video_3)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_3; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_4 = get_field('image_4');
                            if( !empty( $image_4) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_4['url']); ?>" alt="<?php echo esc_attr($image_4)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_4 = get_field('video_4');
                            if( !empty( $video_4)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_4; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_5 = get_field('image_5');
                            if( !empty( $image_5) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_5['url']); ?>" alt="<?php echo esc_attr($image_5)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_5 = get_field('video_5');
                            if( !empty( $video_5)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_5; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_6 = get_field('image_6');
                            if( !empty( $image_6) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_6['url']); ?>" alt="<?php echo esc_attr($image_6)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_6 = get_field('video_6');
                            if( !empty( $video_6)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_6; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_7 = get_field('image_7');
                            if( !empty( $image_7) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_7['url']); ?>" alt="<?php echo esc_attr($image_7)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_7 = get_field('video_7');
                            if( !empty( $video_7)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_7; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_8 = get_field('image_8');
                            if( !empty( $image_8) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_8['url']); ?>" alt="<?php echo esc_attr($image_8)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_8 = get_field('video_8');
                            if( !empty( $video_8)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_8; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_9 = get_field('image_9');
                            if( !empty( $image_9) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_9['url']); ?>" alt="<?php echo esc_attr($image_9)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_9 = get_field('video_9');
                            if( !empty( $video_9)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_9; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_9 = get_field('image_9');
                            if( !empty( $image_9) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_9['url']); ?>" alt="<?php echo esc_attr($image_9)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_9 = get_field('video_9');
                            if( !empty( $video_9)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_9; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_10 = get_field('image_10');
                            if( !empty( $image_10) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_10['url']); ?>" alt="<?php echo esc_attr($image_10)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_10 = get_field('video_10');
                            if( !empty( $video_10)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_10; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_11 = get_field('image_11');
                            if( !empty( $image_11) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_11['url']); ?>" alt="<?php echo esc_attr($image_11)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_11 = get_field('video_11');
                            if( !empty( $video_11)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_11; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_12 = get_field('image_12');
                            if( !empty( $image_12) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_12['url']); ?>" alt="<?php echo esc_attr($image_12)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_12 = get_field('video_12');
                            if( !empty( $video_12)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_12; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_13 = get_field('image_13');
                            if( !empty( $image_13) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_13['url']); ?>" alt="<?php echo esc_attr($image_13)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_13 = get_field('video_13');
                            if( !empty( $video_13)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_13; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_14 = get_field('image_14');
                            if( !empty( $image_14) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_14['url']); ?>" alt="<?php echo esc_attr($image_14)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_14 = get_field('video_14');
                            if( !empty( $video_14)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_14; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_15 = get_field('image_15');
                            if( !empty( $image_15) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_15['url']); ?>" alt="<?php echo esc_attr($image_15)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_15 = get_field('video_15');
                            if( !empty( $video_15)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_15; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_16 = get_field('image_16');
                            if( !empty( $image_16) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_16['url']); ?>" alt="<?php echo esc_attr($image_16)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_16 = get_field('video_16');
                            if( !empty( $video_16)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_16; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_17 = get_field('image_17');
                            if( !empty( $image_17) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_17['url']); ?>" alt="<?php echo esc_attr($image_17)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_17 = get_field('video_17');
                            if( !empty( $video_17)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_17; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_18 = get_field('image_18');
                            if( !empty( $image_18) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_18['url']); ?>" alt="<?php echo esc_attr($image_18)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_18 = get_field('video_18');
                            if( !empty( $video_18)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_18; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_19 = get_field('image_19');
                            if( !empty( $image_19) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_19['url']); ?>" alt="<?php echo esc_attr($image_19)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_19 = get_field('video_19');
                            if( !empty( $video_19)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_19; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                            <?php 
                            $image_20 = get_field('image_20');
                            if( !empty( $image_20) ): ?>
                                <div class="artwork-container">
                                    <img src="<?php echo esc_url($image_20['url']); ?>" alt="<?php echo esc_attr($image_20)['alt']; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php 
                            $video_20 = get_field('video_20');
                            if( !empty( $video_20)  ): ?>
                                <div class="artwork-container">
                                    <video controls>
                                        <source src="<?php echo $video_20; ?>">
                                    </video>
                                </div>
                            <?php endif; ?>

                    </div>
                </div>

        <?php endwhile; ?>
</main>

<?php get_footer(); ?>