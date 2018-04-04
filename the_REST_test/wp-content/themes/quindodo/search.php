<?php get_header(); ?>

	<div class="row">
		<div class="cell well">
			<div class="g">
				<div class="g-b g-b--center">


					<?php if (have_posts()) : ?>

						<h2>Search Results</h2>

						<?php while (have_posts()) : the_post(); ?>

							<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

								<h2><?php the_title(); ?></h2>

								<div class="entry">

									<?php the_excerpt(); ?>

								</div>

							</article>

						<?php endwhile; ?>

					<?php else : ?>

						<h2>No posts found.</h2>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>