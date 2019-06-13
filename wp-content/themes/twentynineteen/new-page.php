<?php
/**
 * The template for displaying all single posts
 * Template Name: CustomTemplate
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<!-- main section -->
        <div class="container-fluid">
            <div class="row">
                <!-- left contact -->
            <div id="left" class="col-lg-2 text-left">
                <div id="left-box">
                    <ul class="text-center">
                    <li><a href="mailto: booking@balticpark-molo.pl">booking@balticpark-molo.pl</a></li>
                    <li><a href="tel: 48914040400">T. +48 91 40 40 400</a></li>
                    </ul>
                </div></div>
                <!-- /left contact -->
            <div class="col-lg-8 col-sm-12 text-center" style="padding-bottom: 15%">
                <h3><?php the_title(); ?></h3>
                <h2><strong>Discover </strong><span style="color: #f4793a"><i>baltic</i></span><strong> aparthotel</strong></h2>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
        
        

        
            <?php the_content(); ?>
        

        
    <?php endwhile; endif; ?>
                
                <p><small>discover appartments room</small></p>
                <img id="arrow" src="<?php echo get_template_directory_uri() . '/img/arrow.svg' ;?>" alt="arrow bottom"/>
                </div>
                
                <!-- right social media -->
            <div id="right" class="col-lg-2 text-right">
                <ul>
                <li><i class="fa fa-facebook-f"></i></li>
                <li><i class="fa fa-twitter"></i></li>
                <li><i class="fa fa-instagram"></i></li>
                </ul>
                </div>
                <!-- /right social media -->
        </div>

        </div>
        <!-- /main section -->
        
        <!-- quasi footer -->
        <div id="foo" class="container">
        <div class="row text-center" style="padding: 0 45% 15px 45%;">
            <div class="col-lg-4"><i class="fa fa-facebook-f"></i></div>
            <div class="col-lg-4"><i class="fa fa-twitter"></i></div>
            <div class="col-lg-4"><i class="fa fa-instagram"></i></div>
            </div>
        
        
        <div id="foo-m" class="row text-center">
            <ul>
            <li>Home</li>
            <li>Aquapark</li>
            <li>Aparthotel</li>
            <li>Zdrojowa Hotels</li>
            <li>Contact</li>
            </ul>
            </div>
        </div>
        <!-- / quasi footer -->


