<?php
/*
Template Name: Global Serviclean

Index.
*/
?>

<body <?php body_class('body'); ?>>
  <?php get_header(); ?>

  <div class="body-content">

  	<div class="container">

  		<?php
  		/*** Thumbnails  ***/
  		?>
  		<div class="row-fluid thumbnails-custom">
      	<ul class="thumbnails">
					<?php
					// Do this for every post in the category INDEX
					while (have_posts()) {
						// Get post
						the_post();
						?>
						<li class="span4">
							<div class="thumbnail-custom">
				        <h3><?php the_title(); ?></h3>
				        <p><?php the_content(); ?></p>
							</div>
						</li>
						<?php
					}
					?>
				</ul>
			</div>

  	</div>

  </div>

  <?php get_footer(); ?>
</body>