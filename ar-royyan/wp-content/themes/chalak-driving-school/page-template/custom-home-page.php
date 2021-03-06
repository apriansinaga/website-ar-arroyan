<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'chalak_driving_school_above_slider' ); ?>

<?php if( get_theme_mod('chalak_driving_school_slider_hide_show') != ''){ ?>	
	<section id="slider">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
		    <?php $pages = array();
		      	for ( $count = 1; $count <= 3; $count++ ) {
			        $mod = intval( get_theme_mod( 'chalak_driving_school_slider' . $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $pages[] = $mod;
			        }
		      	}
		      	if( !empty($pages) ) :
		        $args = array(
		          	'post_type' => 'page',
		          	'post__in' => $pages,
		          	'orderby' => 'post__in'
		        );
		        $query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          $i = 1;
		    ?>     
		    <div class="carousel-inner" role="listbox">
		      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		          	<a href="<?php echo esc_url( get_permalink() );?>"><img src="<?php the_post_thumbnail_url('full'); ?>"/></a>
		          	<div class="carousel-caption d-none d-md-block">
			            <div class="inner_carousel">
			              	<h2><?php the_title();?></h2>
			              	<p><?php $excerpt = get_the_excerpt(); echo esc_html( chalak_driving_school_string_limit_words( $excerpt,20 ) ); ?></p>
			              	<div class="read-btn">
					          <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'chalak-driving-school' ); ?>"><?php esc_html_e('Read More','chalak-driving-school'); ?>
					          </a>
					      	</div>	
			            </div>
		          	</div>
		        </div>
		      	<?php $i++; endwhile; 
		      	wp_reset_postdata();?>
		    </div>
		    <?php else : ?>
		    <div class="no-postfound"></div>
		      <?php endif;
		    endif;?>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
		    </a>
	  	</div>  
	  	<div class="clearfix"></div>
	</section>
<?php }?>

<?php do_action('chalak_driving_school_below_slider'); ?>

<?php /*--our-services --*/?>

<?php if( get_theme_mod('chalak_driving_school_our_services_title') != ''){ ?>
	<section id="our-services">
		<div class="container">			
			<div class="service-box">
				<div class="service-title">
		    		<?php if( get_theme_mod('chalak_driving_school_our_services_title') != ''){ ?>
	            		<h3><?php echo esc_html(get_theme_mod('chalak_driving_school_our_services_title',__('OUR SERVICES','chalak-driving-school'))); ?></h3><hr class="hr-hr">
	            	<?php }?>
	            </div>
	            <div class="row">
		      		<?php $page_query = new WP_Query(array( 'category_name' => get_theme_mod('chalak_driving_school_category_setting','chalak-driving-school')));?>
		        		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>	
		          			<div class="col-md-4">
		          				<div class="service-section">
		      						<div class="service-img">
							      		<img src="<?php the_post_thumbnail_url('full'); ?>"/>
							  		</div>
	          						<div class="content">
					            		<h4><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?></a></h4><hr class="hr-hr">
					            		<p><?php $excerpt = get_the_excerpt(); echo esc_html( chalak_driving_school_string_limit_words( $excerpt,10 ) ); ?></p>
					            		<div class="read-btn">
							         		<a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'chalak-driving-school' ); ?>"><?php esc_html_e('Read More','chalak-driving-school'); ?>
							          		</a>
							      		</div>
		            				</div>	
		          				</div>
						    </div>    	
		          		<?php endwhile; 
		          	wp_reset_postdata();
		      		?>
	      		</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
<?php }?>

<?php do_action('chalak_driving_school_below_our_service_section'); ?>

<div class="container">
  	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>