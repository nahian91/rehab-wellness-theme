<?php

/*
Template Name: Doctors
*/

get_header();?>

    <!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php the_title();?></h1>
                        <nav class="wow fadeInUp" >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <div class="page-team">
    <div class="container">
        <div class="row">
            <?php
            $args = array(
                'post_type'      => 'doctor',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $doctor_query = new WP_Query($args);

            if ($doctor_query->have_posts()) :
                $delay = 0;
                while ($doctor_query->have_posts()) : $doctor_query->the_post();
                    ?>
                    <div class="col-xl-4 col-md-6">
                        <!-- Team Item Start -->
                        <div class="team-item wow fadeInUp" <?php echo ($delay > 0) ? 'data-wow-delay="' . $delay . 's"' : ''; ?>>
                            <div class="team-item-image">
                                <a href="<?php the_permalink(); ?>" data-cursor-text="View">
                                    <figure>
                                        <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full');
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/assets/images/placeholder.jpg" alt="' . get_the_title() . '">';
                                        }
                                        ?>
                                    </figure>
                                </a>
                            </div>
                            <div class="team-item-body">
                                <div class="team-item-content" style="padding-top: 20px;">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php echo esc_html(get_field('doctor_designation')); ?></p>
    
    <a href="<?php the_permalink(); ?>" class="btn-default" style="margin-bottom: 10px; display: inline-block;">View Profile</a>
</div>
                            </div>
                        </div>
                        <!-- Team Item End -->
                    </div>
                    <?php
                    $delay += 0.2;
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No doctors found.</p>';
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer();?>