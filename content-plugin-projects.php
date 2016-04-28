<?php
/**
* Template for displaying plugin projects custom post type entries
*/
?>
<div class="container-plugin-projects">
<h5><?php the_title(); ?></h5>
<p><img src="<?php the_field('screenshot'); ?>" alt="Screenshot for <?php the_title(); ?>" class="plugin-projects-screenshot"/><?php the_field('description');?></p>
<p><a href="<?php the_field('demo');?>">Demo</a><br/>
	<a href="<?php the_field('link');?>" target="_blank">Download</a></p>
</div>