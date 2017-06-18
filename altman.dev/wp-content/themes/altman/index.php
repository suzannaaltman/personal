<?php get_header(); ?>

  <div class="row"> <!--  Begins the main row -->


		<div class="col-xs-12 main">

			<?php get_template_part( 'content', get_post_format() ); ?>

		</div>

		<?php get_sidebar(); ?>

  </div> <!--  Ends the main row -->

<?php get_footer(); ?>
