<?php get_header(); ?>
<section class='no-padding-bottom'>
	<div class='container'>
		<div class='row'>
			<div class="col-md-2"></div>
			<div class='col-md-8'>
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</section>
<section class='padding-top border-bottom triple-padding-bottom triple-margin-bottom'>
	<div class='container'>
		<div class='row'>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-2"></div>
			<div class='col-md-8'>
				<div class="border-bottom margin-bottom padding-bottom">
					<?php the_content(); ?>
				</div>
				<!--<div class="margin-bottom">
					<h3>Comments</h3>
					<?php comments_template('', true); ?> 
				</div>-->
			</div>
			<div class="col-md-2"></div>
		
		</div>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>