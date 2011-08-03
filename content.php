<?php
/**
 * Smart Theme Default Template for content 
 *
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php  printf( esc_attr__( 'Permalink to %s', 'stt' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>	

			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
				</div>
			<?php endif; ?>

			<?php if ( comments_open() && ! post_password_required() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'stt' ) . '</span>', _x( '1', 'comments number', 'stt' ), _x( '%', 'comments number', 'stt' ) ); ?>
				</div>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		<?php else : ?>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading', 'stt' ) ); ?>
			</div><!-- .etnry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php
				$categories = get_the_category_list( __( ', ', 'stt' ) );
				if ( $categories ) :
			?>
					<span class="cat-links">
						<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'stt' ), 'entry-utility-pre entry-utility-prep-cat-links', $categories ); ?>
					</span>
			<?php endif; // End if $categories ?>
			<?php
				$tags = get_the_tag_list( '', __( ', ', 'stt' ) );
				if ( $tags ) :
			?>
					<span class="tag-links">
						<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'stt' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags ); ?>
					</span>
			<?php endif; // End if $tags ?>
			<?php if ( comments_open() ) : ?>
				<span class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'stt' ) . '</span>', __( '<b>1</b> Reply', 'stt' ), __( '<b>%</b> Replies', 'stt' ) ); ?>
				</span>
			<?php endif; // End if comments_open() ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?>>
