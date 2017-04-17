<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Unelma
 * @since Unelma 1.0
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<!-- Start cycle WordPress -->
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
							<div class="featured-post">
								<?php _e( 'Favorite entry', '' ); ?>
							</div>
						<?php endif; ?>

						<?php if ( is_single() ||  is_page() ) : ?>
							<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php else : ?>
							<h1 class="entry-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?></a>
							</h1>
						<?php endif; ?>

						<?php echo get_the_category_list(); ?>
						<?php echo get_the_tag_list('', ', ');?>
					</header><!-- .entry-header -->

					<?php if ( is_search() ) :  ?>
						<div class="entry-summary">
							<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->

					<?php else : ?>
						<div class="entry-content">
							<?php the_content( __( 'Read more... <span class="meta-nav">&rarr;</span>', '' ) ); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'P:', '' ), 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content -->
					<?php endif; ?>

					<footer class="entry-meta">

						<?php printf(
							__( 'This entry was posted on %1$s author %2$s.', '' ),
							esc_html( get_the_date() ),
							esc_html( get_the_author() )
							);
						?>
						<?php edit_post_link( __( 'Edit', '' ), '<span class="edit-link">', '</span>' ); ?>

					</footer><!-- .entry-meta -->
			
				</article><!-- #post -->
			<?php endwhile; ?>
			<!-- End cycle WordPress -->
			
			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<nav id="nav-below">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous entry', '' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'next entry <span class="meta-nav">&rarr;</span>', '' ) ); ?></div>
				</nav><!-- #nav-below .navigation -->
			<?php endif; ?>
		<?php endif; ?>	
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

